$(function() {

///////// Variables

var 
	html = $('html'),
	win = $( window ),
	subnav = $( '.js-with-sub-nav' ),
	hamburger = $('.hamburger');

///////// Loaded Class

win.on( 'load', function() {
	html.addClass( 'loaded' );
});

var winWidth;
function updateWinWidth() {
	winWidth = window.innerWidth;
}

win.on( 'resize load', updateWinWidth );

///////// Hamburger

hamburger.click(function(e){
	e.preventDefault();
	html.toggleClass('js-nav-open');
});


///////// Sub Nav

subnav.click(function(e){
	if (winWidth <= 1070 ) {
		e.preventDefault();
		$(this).toggleClass('js-sub-nav-open');
	}
});

//////// Flickity

var flickityGallery = $( '.js-slider' );

flickityGallery.flickity({
	cellAlign: 'left',
	contain: true,
	autoPlay: 4500,
	pageDots: true,
	prevNextButtons: true,
	percentPosition: false,
	imagesLoaded: true
});

var flickityGalleryData = flickityGallery.data( 'flickity' );

win.on( 'resize', function() {
	if( flickityGalleryData ) {
		flickityGalleryData.resize();
	}
});

var flickityGallery2 = $( '.js-slider-2' );

flickityGallery2.flickity({
	cellAlign: 'left',
	contain: true,
	autoPlay: 4500,
	pageDots: false,
	prevNextButtons: true,
	percentPosition: false,
	imagesLoaded: true
});

var flickityGalleryData2 = flickityGallery2.data( 'flickity' );


flickityGallery.find('video').each( function( i, video ) {
    video.play();
    $( video ).on( 'loadeddata', onLoadeddata );
  });


win.on( 'resize', function() {
	if( flickityGalleryData2 ) {
		flickityGalleryData2.resize();
	}
});
//////// Venobox

$('.venobox').venobox(); 

//////// Sticky Footer

function stickyFooter() {
	var footerHeight = $("footer").height();
	$(".wrapper").css("padding-bottom", footerHeight);
	$("footer").css("margin-top", -footerHeight);
}
win.on( 'load resize', stickyFooter );

/*===============================================
IE 10
===============================================*/

if (navigator.userAgent.match('MSIE 10.0;')) {
  $('html').addClass('ie10');
}

if (Object.hasOwnProperty.call(window, "ActiveXObject") && !window.ActiveXObject) {
    $('html').addClass('ie11');
}

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}

}); // jQuery