var ballCurve, ballMargin, ballSize, cols, rows, startDelta, _i, _results;

rows = 15;

cols = 4;

ballSize = 120;

ballMargin = 40;

ballCurve = "spring(600,20,10)";

startDelta = 100;

(function() {
  _results = [];
  for (var _i = 1; 1 <= rows ? _i <= rows : _i >= rows; 1 <= rows ? _i++ : _i--){ _results.push(_i); }
  return _results;
}).apply(this).map(function(a) {
  var _i, _results;
  return (function() {
    _results = [];
    for (var _i = 1; 1 <= cols ? _i <= cols : _i >= cols; 1 <= cols ? _i++ : _i--){ _results.push(_i); }
    return _results;
  }).apply(this).map(function(b) {
    var B1, G1, R1, ball;
    ball = new View({
      x: b * (ballSize + ballMargin),
      y: a * (ballSize + ballMargin) + startDelta,
      width: ballSize,
      height: ballSize,
      opacity: 0
    });
    // R1 = 240 / cols * a;
    // G1 = 220 / rows * b;
    // B1 = 200;
    R1 = 255;
    G1 = 167;
    B1 = 167;

    ball.style = {
      backgroundColor: "rgba(" + R1 + "," + G1 + "," + B1 + ",1)",
      borderRadius: "0%",
      border: "10px solid red",
      lineHeight: ball.height - 5 + "px"
    };
    
    ball.html = "Go John";
    ball.states.add('fadein', {
      y: a * (ballSize + ballMargin),
      opacity: 1
    });
    
    ball.states.animationOptions = {
      curve: ballCurve
    };
    
    ball.states.animationOptions.delay = 0.05 * a + 0.05 * b;
    return ball.states["switch"]('fadein');
  });
});
