setTimeout(function() {
  $('#hide').css('visibility', 'visible')
}, 2400);

setTimeout(function(){
  anime.timeline()
    .add({
      targets: '.ml5 .line0',
      opacity: [0.5,1],
      scaleX: [0, 1],
      easing: "easeInOutExpo",
      duration: 700
    }).add({
      targets: '.ml5 .line0',
      duration: 600,
      easing: "easeOutExpo",
      translateY: (el, i) => (-0.580 + 0.500*2*i) + "em"
    }).add({
      targets: '.ml5 .letters-middle',
      opacity: [0,1],
      scaleY: [0.5, 1],
      easing: "easeOutExpo",
      duration: 600,
      offset: '-=600'
    }).add({
      targets: '.ml5 .letters-left',
      opacity: [0,1],
      translateX: ["3em", 0],
      easing: "easeOutExpo",
      duration: 1000,
      offset: '-=300'
    }).add({
      targets: '.ml5 .letters-right',
      opacity: [0,1],
      translateX: ["-3em", 0],
      easing: "easeOutExpo",
      duration: 1000,
      offset: '-=600'
    })
}, 2300);