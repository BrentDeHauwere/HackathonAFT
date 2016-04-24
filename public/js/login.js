/* jshint browser: true */
/* global CanvasHelper, Debugger, Viewport, Sky, Planet, gajus, Time, Color, Degrees */
/**
 * Created by Dieter on 23/04/2016.
 */

var App = (function() {

    function App() {
        window.addEventListener("load", this.init.bind(this), false);
        window.addEventListener("resize", this.resize.bind(this), false);
    }

    App.prototype.init = function() {

        // Test canvas support
        if(!CanvasHelper.canvasSupport()) {
            Debugger.log("Canvas is niet gevonden");
            return false;
        }

        // initialize canvas
        this.canvas = new CanvasHelper("page-header-canvas");
        this.context = this.canvas.context;

        // automatically resize canvas
        this.oldViewportWidth = Viewport.getWidth();
        this.oldViewportHeight = Viewport.getHeight();

        // Scene setup
        this.sky = new Sky(this.canvas);
        this.moon = new Planet(this.canvas);
        this.sun = new Planet(this.canvas);

        // initialize the main loop
        window.setInterval(function() {
            if(this.oldViewportHeight !== Viewport.getHeight() || this.oldViewportWidth !== Viewport.getWidth()) {
                this.resize();
                this.oldViewportHeight = Viewport.getHeight();
                this.oldViewportWidth = Viewport.getWidth();
            }
        }.bind(this), 1000);

        window.setInterval(function() {
            this.resize();

        }.bind(this), 10000);

        // Start tracking the orientation change.
        this.OCE = gajus.orientationchangeend({});

        // Attach event listener to the "orientationchangeend" event.
        this.OCE.on('orientationchangeend', this.resize);

        this.resize();
        this.resize();
    };

    App.prototype.draw = function() {
        this.context.save();

        this.sky.draw();

        this.context.translate(this.sky.c.x, this.sky.c.y);
        this.context.rotate(this.rotation);

        this.moon.draw();
        this.sun.draw();

        this.context.restore();
    };

    App.prototype.update = function() {
        this.time = Time.getCurrent(); // {h: 00}
        this.rotation = Degrees.toRadians(this.time.h.map(0, 23, 0, 360) + 90);

        this.sky.update(this.time, App.getColorBasedOnTime(this.time, App.ColorType.SKY),
            this.canvas.width / 2 /* x */, this.canvas.height + (this.moon.r * 2) /* y */, this.canvas.width / 2 /* r */);
        this.moon.update(-(this.sky.r * 0.9), 0, 50, {r: 226, g: 246, b: 225});
        this.sun.update(this.sky.r * 0.9, 0, 50, {r: 242, g: 208, b: 22});
        
        $("#skyline .st0").css({
            fill: App.getColorBasedOnTime(this.time, App.ColorType.SKYLINE)
        });
        
        $("#skyline, #skyline .st0").width(Viewport.getWidth());
        $("#skyline, #skyline .st0").height(Viewport.getWidth() * (338 / 1269));
        
        $("#login-register").width($("#login-register").width());
        $("#forgot-password").width($("#login-register").width());
    };

    App.prototype.resize = function() {
        this.canvas.scaleOnHiDPI();
        this.canvas.resizeCanvas();
        this.update();
        this.draw();
    };

    App.getColorBasedOnTime = function(t, type) {
        var color, darken;

        switch(type) {
            case App.ColorType.SKYLINE:
                darken = true;
                type = App.Colors.sky;
                break;

            case App.ColorType.SKY:
                darken = false;
                type = App.Colors.sky;
                break;
        }

        if(t.h > 6 && t.h <= 12) {
            color = Color.fade(type.morning, type.noon, t.h.map(6, 12, 0, 100));

        } else if(t.h > 12 && t.h <= 20) {
            color = Color.fade(type.noon, type.evening, t.h.map(12, 20, 0, 100));

        } else if(t.h > 20 && t.h <= 24) {
            color = Color.fade(type.evening, type.night, t.h.map(20, 24, 0, 100));

        } else if(t.h > 0 && t.h <= 6) {
            color = Color.fade(type.night, type.morning, t.h.map(0, 6, 0, 100));
        }

        return darken ? Color.darken(color) : color;
    };

    App.ColorType = {
        SKY: 0,
        SKYLINE: 1
    };

    App.Colors = {
        sky: {
            morning: "rgb(249, 236, 171)",
            noon: "rgb(154, 204, 225)",
            afternoon: "rgb(115, 169, 184)",
            evening: "rgb(57, 116, 122)",
            night: "rgb(7, 86, 91)"
        },
        planet: {
            morning: "rgb(224, 189, 83)",
            noon: "rgb(247, 182, 43)",
            afternoon: "rgb(245, 215, 93)",
            evening: "rgb(150, 167, 169)",
            night: "rgb(150, 167, 169)"
        }
    };

    return App;
})();

new App();

$(document).ready(function() {
    $("#forgot-password").css({
        display: "none",
        height: 0
    });
    
    $("#tab2").find( "form" ).hide();
    $("input[for='form-register']").hide();
    
    $("#title-tab2").click(function() {
        $("#tab1").find( "form" ).hide();
        $("#tab2").find( "form" ).show();
        $("#title-tab2").addClass("selected-tab");
        $("#title-tab1").removeClass("selected-tab");
        $(".selected-tab").css("border-radius","0 5px 0 0");
        $("input[for='form-register']").show();
        $("input[for='form-login']").hide();
    });
    
    $("#title-tab1").click(function() {
        $("#tab2").find( "form" ).hide();
        $("#tab1").find( "form" ).show();
        $("#title-tab1").addClass("selected-tab");
        $("#title-tab2").removeClass("selected-tab");
        $(".selected-tab").css("border-radius","5px 0 0 0");
        $("input[for='form-register']").hide();
        $("input[for='form-login']").show();
    });
    
    $(document).on("click", "#a-forgot-password", function() {
        
        $("#login-register").slideUp(500, function() {
            $("#forgot-password").slideDown();
        });
        
    });
});