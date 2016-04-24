/*jshint browser: true, jquery: true*/
/* global Debugger, CanvasHelper, FPS */

var Time = (function() {
    
    function Time() {       
    }
    
    Time.getCurrent = function() {
        var d = new Date();
        return {
            d: d, 
            h: d.getHours(),
            m: d.getMinutes()
        };
    };
    
    return Time;
})();