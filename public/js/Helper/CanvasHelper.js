/* jshint browser: true */
/* global Debugger */

window.requestAnimFrame = (function () {
    return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        window.oRequestAnimationFrame ||
        window.msRequestAnimationFrame ||
        function (callback) {
            window.setTimeout(callback, 1000 / 30);
            return;
        };
});

function CanvasHelper(canvasID) {
    'use strict';
    
    if(!document.getElementById(canvasID)) {
        Debugger.error("Canvas with ID \"" + canvasID + "\" does not exist.");
        return null;
    }
    
    this.canvas = document.getElementById(canvasID);
    this.context = this.canvas.getContext("2d");
    
    this.resizeCanvas();
    this.width = this.canvas.width;
    this.height = this.canvas.height;

    this.ratio = 1;
}

//Static
CanvasHelper.canvasSupport = function () {
    'use strict';
    return !!document.createElement('canvas').getContext;
};

CanvasHelper.convertDegToRad = function (degrees) {
    'use strict';
    return (Math.PI / 180) * degrees;
};

//Proto
CanvasHelper.prototype.clear = function () {
    'use strict';
    this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
};

CanvasHelper.prototype.fade = function (alpha) {
    'use strict';
    this.context.save();
    this.context.fillStyle = "rgba(0, 0, 0, " + alpha + ")";
    this.context.fillRect(0, 0, 500, 500);
    this.context.restore();
};

/**
 * Draw a grid on the canvas
 *
 * @param {string} strokeColorHor - The grids horizontal colorline.
 * @param {string} strokeColorVer - The grids vertical colorline.
 * @param {number} width - The grid width.
 * @param {number} height - The grid height.
 */
CanvasHelper.prototype.drawGrid = function (strokeColorHor, strokeColorVer, width, height) {
    'use strict';
    this.context.save();

    this.context.beginPath();
    this.context.lineWidth = 0.5;
    this.context.strokeStyle = strokeColorHor;

    var i;

    for (i = 10; i < width; i += 10) {
        this.context.moveTo(0, i);
        this.context.lineTo(width, i);
    }
    this.context.stroke();
    this.context.closePath();

    this.context.strokeStyle = strokeColorVer;
    this.context.beginPath();
    for (i = 10; i < height; i += 10) {
        this.context.moveTo(i, 0);
        this.context.lineTo(i, height);

    }
    this.context.stroke();
    this.context.closePath();

    this.context.restore();
};

CanvasHelper.prototype.scaleOnHiDPI = function () {
    'use strict';
    var devicePixelRatio, backingStoreRatio, ratio, oldWidth, oldHeight;


    devicePixelRatio = window.devicePixelRatio || 1;
    backingStoreRatio = this.context.webkitBackingStorePixelRatio ||
        this.context.mozBackingStorePixelRatio ||
        this.context.msBackingStorePixelRatio ||
        this.context.oBackingStorePixelRatio ||
        this.context.backingStorePixelRatio || 1;

    ratio = devicePixelRatio / backingStoreRatio;

    if (devicePixelRatio !== backingStoreRatio) {
        oldWidth = this.canvas.width;
        oldHeight = this.canvas.height;

        this.canvas.width = oldWidth * ratio;
        this.canvas.height = oldHeight * ratio;

        this.canvas.style.width = oldWidth + 'px';
        this.canvas.style.height = oldHeight + 'px';

        this.context.scale(ratio, ratio);
    }

    this.ratio = ratio;
    return true;
};

CanvasHelper.prototype.resizeCanvas = function() {
    this.canvas.width = this.width = window.innerWidth;
    this.canvas.height = this.height = window.innerHeight;
};

// Source: http://stackoverflow.com/a/2173084
CanvasHelper.prototype.drawEllipse = function(ctx, x, y, w, h) {
  var kappa = .5522848,
      ox = (w / 2) * kappa, // control point offset horizontal
      oy = (h / 2) * kappa, // control point offset vertical
      xe = x + w,           // x-end
      ye = y + h,           // y-end
      xm = x + w / 2,       // x-middle
      ym = y + h / 2;       // y-middle

  ctx.beginPath();
  ctx.moveTo(x, ym);
  ctx.bezierCurveTo(x, ym - oy, xm - ox, y, xm, y);
  ctx.bezierCurveTo(xm + ox, y, xe, ym - oy, xe, ym);
  ctx.bezierCurveTo(xe, ym + oy, xm + ox, ye, xm, ye);
  ctx.bezierCurveTo(xm - ox, ye, x, ym + oy, x, ym);
  //ctx.closePath(); // not used correctly, see comments (use to close off open path)
  ctx.stroke();
};

window.addEventListener("resize", this.resizeCanvas);