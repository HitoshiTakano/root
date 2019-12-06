new Vue({
  el: '#js-todoList',
  data: {
    newItem: "",
    todos: []
  },
  methods: {
    addItem: function(event) {
      event.preventDefault();
      if (this.newItem == "") return;
      this.todos.push({
        item: this.newItem
      });
      this.newItem = "";
    },
    deleteItem: function(todo) {
      var index = this.todos.indexOf(todo);
      this.todos.splice(index, 1);
      console.log('test');
    },
    saveData() {
      //this.changeCount の値を保存
      const parsed = JSON.stringify(this.changeCount);
      localStorage.setItem('todos' + id, parsed);
    },
    removeData() {
      //this.changeCount の値を除去
      const parsed = JSON.stringify(this.changeCount);
      localStorage.removeItem('changeCount');
      this.changeCount = 0;
    }
  }
})
