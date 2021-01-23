$(document).ready(function() {
	
	$('figure').mouseout( function() { 
		$('figure').removeClass('opacity');
		$('.description').hide();
		$('.description#intro').show();
	});
	
	$('#fig1').mouseover( function() { 
		$('figure').removeClass('opacity');
		$(this).addClass('opacity');
		$('.description#intro').hide();		
		$('#charlie').fadeOut();
		$('#alix').fadeOut();
		$('#elio').fadeOut();
		$('#aylan').fadeOut();
		$('#sasha').show();
	});
	
	$('#fig2').mouseover( function() { 
		$('figure').removeClass('opacity');
		$(this).addClass('opacity');
		$('#sasha').fadeOut();
		$('#alix').fadeOut();
		$('#elio').fadeOut();
		$('#aylan').fadeOut();
		$('.description#intro').hide();
		$('#charlie').show();
	});
	
	$('#fig3').mouseover( function() { 
		$('figure').removeClass('opacity')
		$(this).addClass('opacity');
		$('#charlie').fadeOut();
		$('#aylan').fadeOut();
		$('#elio').fadeOut();
		$('#sasha').fadeOut();
		$('.description#intro').hide();
		$('#alix').show();
	});

	$('#fig4').mouseover( function() { 
		$('figure').removeClass('opacity')
		$(this).addClass('opacity');
		$('#charlie').fadeOut();
		$('#alix').fadeOut();
		$('#aylan').fadeOut();
		$('#sasha').fadeOut();
		$('.description#intro').hide();
		$('#elio').show();
	});

	$('#fig5').mouseover( function() { 
		$('figure').removeClass('opacity')
		$(this).addClass('opacity');
		$('#charlie').fadeOut();
		$('#alix').fadeOut();
		$('#elio').fadeOut();
		$('#sasha').fadeOut();
		$('.description#intro').hide();
		$('#aylan').show();
	});


	//Menu
	$('#burger').click(function() {
		$('.navbar').animate({ "left": "+=230px" }, "slow" );
		$('.container').addClass('left');
	});
	$('#close').click(function() {
		$('.navbar').animate({ "left": "-=230px" }, "slow" );
		$('.container').removeClass('left');
	});
	
	//Footer
	/**
     * Set footer always on the bottom of the page
     */
    function footerAlwayInBottom(footerSelector) {
        var docHeight = $(window).height();
        var footerTop = footerSelector.position().top + footerSelector.height();
        if (footerTop < docHeight) {
            footerSelector.css("margin-top", (docHeight - footerTop) + "px");
        }
    }
    // Apply when page is loading 
    footerAlwayInBottom($("#footer"));
    // Apply when page is resizing
    $(window).resize(function() {
        footerAlwayInBottom($("#footer"));
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