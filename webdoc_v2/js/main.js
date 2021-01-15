$(document).ready(function() {
	
	//Menu
	$('#burger').click(function() {
		$('.navbar').animate({ "left": "+=230px" }, "slow" );
		if ($(window).width() >= 1024) {
			$('.container').addClass('left');
		}
	});
	
	$('#close').click(function() {
		$('.navbar').animate({ "left": "-=230px" }, "slow" );
		
		if ($(window).width() >= 1024) {
			$('.container').removeClass('left');
		}
	});
	
	//Progression
	$(window).scroll(function(){
		var h = $(document).height(); 
		var s = $(window).scrollTop(); 
		var w = $(window).height();  
		var t = (s / h) * w;
		var p = Math.ceil((s + t) / h * 120) + 1; 
		$('#barre').width(p + '%');
	});	
});

 
 /*!
 * IE10 viewport hack for Surface/desktop Windows 8 bug
 * Copyright 2014-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
 
(function () {
  'use strict';
  if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
    var msViewportStyle = document.createElement('style');
    msViewportStyle.appendChild(
      document.createTextNode(
        '@-ms-viewport{width:auto!important}'
      )
    );
    document.querySelector('head').appendChild(msViewportStyle);
  }
})();