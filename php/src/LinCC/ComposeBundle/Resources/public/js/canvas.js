(function() {


function lincc_canvas(canvas_id) {
    this.stage = new createjs.Stage(canvas_id);
}


lincc_canvas.prototype.init = function() {
    
}


$(document).ready(function () {
    new lincc_canvas('lincc_canvas').init();
});


//$(document).ready(function () {
//    return;
//    var canvas = document.getElementById('lincc_canvas');
//    var stage = new createjs.Stage(canvas);
//
//    var rect = new createjs.Shape();
//    rect.graphics.beginFill("#000").drawRect(10, 10, 100, 100);
//    stage.addChild(rect);
//
//    var circle = new createjs.Shape();
//    circle.graphics.setStrokeStyle(1).beginStroke("rgba(0,0,0,1)").drawCircle(160, 60, 40);
//    stage.addChild(circle);
//
//    var line = new createjs.Shape();
//    line.graphics.moveTo(220, 60).setStrokeStyle(1).beginStroke("#00ff00").lineTo(300, 60);
//    stage.addChild(line);
//
//    var polystar = new createjs.Shape();
//    polystar.graphics.setStrokeStyle(1).beginStroke("#0000ff").drawPolyStar(360, 60, 10, 5, 6, 20);
//    stage.addChild(polystar);
//
//    var gradient = new createjs.Shape();
//    gradient.graphics.beginLinearGradientFill(["rgba(255,198,255,1)", "rgba(0,255,0,1)"], [0, 1], 0, 50, 0, 130).drawRoundRect(430, 10, 90, 90, 10);
//    stage.addChild(gradient);
//
//
//    stage.update();
//
//});

}())