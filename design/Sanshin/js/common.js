// console dev warning remove
Vue.config.devtools = false;
Vue.config.productionTip = false;


// Custom Directive
Vue.directive('scroll', {
  inserted: function (el, binding) {
    var f = function (evt) {
      if (binding.value(evt, el)) {
        window.removeEventListener('scroll', f)
      }
    }
    window.addEventListener('scroll', f)
  }
});

// MENU EVENT
var header = new Vue({
	el:'header',
	data:{
		isActive:false,
		bodyScroll:false,
		navActive:false,
	},
	methods:{
		menuBtn:function(){
			this.isActive = (this.isActive==false) ? true : false;
			this.navActive = (this.navActive==false) ? true : false;
			this.preventScroll();
		},
		preventScroll:function(){
			var bd = document.body;
			this.bodyScroll = (!this.bodyScroll) ? true : false;
			(this.bodyScroll) ? bd.classList.add('active') : bd.classList.remove('active');
		},
		resizeMenuEvent:function(){
			var width = window.innerWidth;
			var bd = document.body;
			if(width>=800){
				this.isActive = false;
				bd.classList.remove('active')
			}
		},
	},
	mounted() {
		window.addEventListener('resize', this.resizeMenuEvent);
	},
	beforeDestroy() {
		window.removeEventListener('resize', this.resizeMenuEvent);
	}
});

// MAIN EVENT
var main = new Vue({
	el:'main#main',
	data:{
		sections:[],
		scrollY:0,
		results:[],
		bodychk:false,
	},
	methods:{
		initSet:function(){
			var arr = this.$refs
			for (k in arr) {
				var id = document.getElementById(k);					// id名から要素をオブジェクト化
				var pos = id.getBoundingClientRect();					// windowからの座標取得
				
				var offset = window.innerHeight / 2 + 100;				// event範囲調整用offset

				var pTop = pos.top + window.pageYOffset - offset;		// scroll量に応じて変化するため、要素のtop座標にスクロール量を加算
				var pBottom = pos.bottom + window.pageYOffset + offset;	// scroll量に応じて変化するため、要素のbottom座標にスクロール量を加算

				// 整数化
				pTop = parseInt(pTop,10);
				pBottom = parseInt(pBottom,10);

				// if(pTop==NaN || pBottom==NaN) console.log('chk');
				// 各要素を連想配列化
				var array = {
					key : k,
					top : pTop,
					btm : pBottom,
					flg : false,
				}
				this.sections.push(array);
			}
			this.scrollEvent(this.scrollY);
		},
		handleScroll: function (evt, el) {
			this.scrollY = window.scrollY;
			this.headerEvent(this.scrollY);
			this.scrollEvent(this.scrollY);
		},
		scrollEvent: function(posY){
			for (var i = 0; i < this.sections.length; i++) {
				var elem = document.getElementById(this.sections[i].key);
				(posY >= this.sections[i].top && posY <= this.sections[i].btm) ? elem.classList.add('active') : elem.classList.remove('active') ;
			}
		},
		headerEvent:function(py){
			var elem = document.getElementsByTagName('header');
			var header = elem[0];
			(py>50) ? header.classList.add('active') : header.classList.remove('active') ;
		}
	},
	mounted(){
		this.handleScroll();
		this.initSet();
		axios.get("./php/data.php")
		.then(response => {
			this.results = response.data
		});
	},
	updated(){
		// this.scrollEvent(this.scrollY);
	},
	computed:{
		eventResult:function(){
			return this.results;
		},
	},
});