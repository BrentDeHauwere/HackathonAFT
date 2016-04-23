/**
 * Created by Dieter on 23/04/2016.
 */

function Planet(canvas) {
    this.canvas = canvas.canvas;
    this.context = canvas.context;
}

Planet.prototype.update = function(x, y, r, fill) {
    this.c = {
        x: x,
        y: y
    };
    this.r = r;
    this.fill = fill;
    this.fill.a = 0.07;
};

Planet.prototype.draw = function() {
    this.context.beginPath();
    this.context.arc(this.c.x, this.c.y, this.r, 0, 2*Math.PI);
    this.context.fillStyle = "rgb(" + this.fill.r + ", " + this.fill.g + ", " + this.fill.b + ")";
    this.context.fill();
    this.context.closePath();
    
    for(var i = 1; i < 6; i++) {
        this.context.beginPath();
        this.context.arc(this.c.x, this.c.y, this.r + ((this.r * 0.7) * i), 0, 2*Math.PI);
        this.context.fillStyle = "rgba(" + this.fill.r + ", " + this.fill.g + ", " + this.fill.b + ", " + this.fill.a + ")";
        this.context.fill();
        this.context.closePath();
    }
};