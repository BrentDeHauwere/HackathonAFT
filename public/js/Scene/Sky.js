/**
 * Created by Dieter on 23/04/2016.
 */

function Sky(canvas) {
    this.canvas = canvas.canvas;
    this.context = canvas.context;
}

Sky.prototype.update = function(time, color, x, y, r) {
    this.time = time;
    this.color = color;
    this.c = {
        x: x,
        y: y, //this.canvas.height * 1.5
    };
    this.r = r; // this.canvas.width * 1.5;
    this.r = r;
};

Sky.prototype.draw = function() {
    this.context.fillStyle = this.color;
    this.context.fillRect(0, 0, this.canvas.width, this.canvas.height);
};