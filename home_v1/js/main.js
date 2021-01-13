$(document).ready(function() {
	
	$('#fig1').click( function() { 
		$('figure').removeClass('opacity')
		$(this).addClass('opacity');
		$('#sasha').slideDown();
		$('#charlie').hide();
		$('#alix').hide();
		$('#elio').hide();
		$('#aylan').hide();
	});
	
	$('#fig2').click( function() { 
		$('figure').removeClass('opacity')
		$(this).addClass('opacity');
		$('#charlie').slideDown();
		$('#sasha').hide();
		$('#alix').hide();
		$('#elio').hide();
		$('#aylan').hide();
	});
	
	$('#fig3').click( function() { 
		$('figure').removeClass('opacity')
		$(this).addClass('opacity');
		$('#alix').slideDown();
		$('#charlie').hide();
		$('#aylan').hide();
		$('#elio').hide();
		$('#sasha').hide();
	});
	
	$('#fig4').click( function() { 
		$('figure').removeClass('opacity')
		$(this).addClass('opacity');
		$('#elio').slideDown();
		$('#charlie').hide();
		$('#alix').hide();
		$('#aylan').hide();
		$('#sasha').hide();
	});
	
	$('#fig5').click( function() { 
		$('figure').removeClass('opacity')
		$(this).addClass('opacity');
		$('#aylan').slideDown();
		$('#charlie').hide();
		$('#alix').hide();
		$('#elio').hide();
		$('#sasha').hide();
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