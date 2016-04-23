/*jshint browser: true, jquery: true*/
/* global Debugger, CanvasHelper, FPS */

var Color = (function() {
    
    function Color() {       
    }
    
    Color.shade = function(color, percent) {
        var f=color.split(","),t=percent<0?0:255,p=percent<0?percent*-1:percent,R=parseInt(f[0].slice(4)),G=parseInt(f[1]),B=parseInt(f[2]);
        return "rgb("+(Math.round((t-R)*p)+R)+","+(Math.round((t-G)*p)+G)+","+(Math.round((t-B)*p)+B)+")";
    };
    
    Color.darken = function(color) {
        return Color.shade(color, -0.25);
    };
    
    // Based on: http://stackoverflow.com/a/22796560/2637528
    Color.fade = function(rgbColor1, rgbColor2, ratio) {
        var color1 = rgbColor1.substring(4, rgbColor1.length - 1).replace(/ /g, '').split(','),
            color2 = rgbColor2.substring(4, rgbColor2.length - 1).replace(/ /g, '').split(','),
            difference,
            newColor = [];
        
        if(ratio > 1) ratio /= 100;

        for (var i = 0; i < color1.length; i++) {
            difference = color2[i] - color1[i];
            newColor.push(Math.floor(parseInt(color1[i], 10) + difference * ratio));
        }

        return 'rgb(' + newColor + ')';
    };
    
    // Source: http://stackoverflow.com/a/5624139/2637528
    Color.hexToRgb = function(hex) {
        // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
        var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
        hex = hex.replace(shorthandRegex, function(m, r, g, b) {
            return r + r + g + g + b + b;
        });

        var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
        return result ? {
            r: parseInt(result[1], 16),
            g: parseInt(result[2], 16),
            b: parseInt(result[3], 16)
        } : null;
    };
    
    Color.hexToRgbString = function(hex) {
        // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
        var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
        hex = hex.replace(shorthandRegex, function(m, r, g, b) {
            return r + r + g + g + b + b;
        });

        var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
        return result ? "rgb(" + parseInt(result[1], 16) + ", " + parseInt(result[2], 16) + ", " + parseInt(result[3], 16) + ")" : null;
    };

    Color.rgbToHex = function(r, g, b) {
        return "#" + Color.componentToHex(r) + Color.componentToHex(g) + Color.componentToHex(b);
    };
    
    Color.componentToHex = function(c) {
        var hex = c.toString(16);
        return hex.length == 1 ? "0" + hex : hex;
    };
    
    return Color;
})();