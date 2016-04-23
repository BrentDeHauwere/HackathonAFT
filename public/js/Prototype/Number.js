// Source: http://stackoverflow.com/a/23202637/2637528
Number.prototype.map = function (in_min, in_max, out_min, out_max) {
    return (this - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
};

// Source: http://stackoverflow.com/a/7228322
Number.randomIntFromInterval = function(min,max) {
    return Math.floor(Math.random()*(max-min+1)+min);
};