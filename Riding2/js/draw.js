$(function(){
    let stageW = 0; // 画面の幅
    let stageH = 0; // 画面の高さ

    // canvas要素の参照を取得
    const canvas = document.querySelector('canvas#wave');
    if(canvas==null) return false;
    // 2Dの描画命令群を取得
    const context = canvas.getContext('2d');

    noise.seed(Math.random());

    size();
    tick();
    window.addEventListener('resize', size);

    /** エンターフレームのタイミングです。 */
    function tick() {
      requestAnimationFrame(tick);
      const time = Date.now() / 4000;
      draw(time);
    }

    /** 描画します。 */
    function draw(time) {
      // 画面をリセット
      context.clearRect(0, 0, stageW, stageH);
      context.lineWidth = 1;

      const amplitude = stageH / 4 * 3; // 振幅（縦幅)の大きさ
      const lineNum = 100; // ラインの数
      const segmentNum = 120; // 分割数

      [...new Array(lineNum).keys()].forEach(j => {
        const coefficient = 50 + j;

        context.beginPath();
        context.strokeStyle = 'blue';

        [...new Array(segmentNum).keys()].forEach(i => {

          const x = i / (segmentNum - 1) * stageW;

          const px = i / coefficient;
          const py = (j / 50 + time);
          const y = amplitude * noise.perlin2(px, py) + stageH / 2;

          if (i === 0) {
            context.moveTo(x, y);
          } else {
            context.lineTo(x, y);
          }
        });
        context.stroke();
      });
    }

    function size() {
      stageW = $(window).width() - 10;
      stageH = $(window).height();

      canvas.width = stageW;
      canvas.height = stageH;
    }

})
