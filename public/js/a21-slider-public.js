(function( $ ) {
	'use strict';

$(function(){

  $('.slide-gallery').flickity({
    prevNextButtons: false,
    pageDots: false,
    autoPlay: $('.slide-gallery').data( 'autoplay' )
  });

  $('.slide-nav').flickity({
    asNavFor: '.slide-gallery',
    contain: true,
    pageDots: false
  });

});


})( jQuery );
