/**
 * Created by Dieter on 23/04/2016.
 */

var Viewport = Viewport || {};

Viewport.getHeight = function() {
    return (window.innerHeight > 0) ? window.innerHeight : screen.height;
}

Viewport.getWidth = function() {
    return (window.innerWidth > 0) ? window.innerWidth : screen.width;
}