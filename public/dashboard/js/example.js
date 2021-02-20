//each, prop, animate, math, text

//.animate( properties [, duration ] [, easing ] [, callback ] )
//"swing" - moves slower at the beginning/end, but faster in the middle
//"linear" - moves in a constant speed
//step : A function to be called after each step of the animation.  step takes: now and fx.
//$(selector).prop(name,value)

$(".count").each(function () {
    $(this)
      .prop("counter", 0)
      .animate(
        {
          counter: $(this).text()
        },
        {
          duration: 4000,

          easing: "swing",

          step: function (now) {
            $(this).text(Math.ceil(now));
          }
        }
      );
  });
