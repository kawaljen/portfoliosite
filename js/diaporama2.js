$(document).ready(function(){
//**********************************************************************
//---------------------------DIAPORAMA----------------------------------
//**********************************************************************	
	var diaporama = document.getElementById('Fader'),
	    conteneur = document.getElementById('porto');
	
//recuperer le scroll top compatible avec tout navigateur
function getScrollXY() {
  var scrOfX = 0, scrOfY = 0;
  if( typeof( window.pageYOffset ) == 'number' ) {
    //Netscape compliant
    scrOfY = window.pageYOffset;
    scrOfX = window.pageXOffset;
  } else if( document.body && ( document.body.scrollLeft || document.body.scrollTop ) ) {
    //DOM compliant
    scrOfY = document.body.scrollTop;
    scrOfX = document.body.scrollLeft;
  } else if( document.documentElement && ( document.documentElement.scrollLeft || document.documentElement.scrollTop ) ) {
    //IE6 standards compliant mode
    scrOfY = document.documentElement.scrollTop;
    scrOfX = document.documentElement.scrollLeft;
  }
  return scrOfY ;//return [ scrOfX, scrOfY ];
}


function windowCenter() {
	var diapwidth= (document.body.clientWidth*90)/100;
	var diapheight= (document.body.clientHeight*80)/100;
	var margeGche= ((document.body.clientWidth-diapwidth)/2)-10;
	var elementHeight=document.getElementById('fix').offsetHeight;// + document.getElementById('propos').offsetHeight+ document.getElementById('accueil').offsetHeight+ document.getElementById('haut').offsetHeight;
	var myScrollTop=getScrollXY();
	var posY=myScrollTop - elementHeight + 10;
	diaporama.style.width=diapwidth+'px';
	diaporama.style.height=diapheight+'px';
	diaporama.style.left=margeGche+'px';
	diaporama.style.top=posY+"px";
}


$.ouvrir=function () { 
		$("#fondtransparent").addClass('diapactif');
		$("#porto").addClass('portodiap');
		$("#Fader").removeClass('dispnone');
		windowCenter();
		}
$.fermer=function(){
		$("#fondtransparent").removeClass('diapactif');
		$("#porto").removeClass('portodiap');
		$("#Fader").addClass('dispnone');
		}		
		


//DECLENCHEURS++++++++++++++++++++++++++++++++++++++++++++++++++++++++++	
$(".bord_img").click(function () { 
		$.ouvrir();
	});

$("#fondtransparent").click(function () { 
		$.fermer();			
	});	
	
	
	
//SLIDER++++++++++++++++++++++++++++++++++++++++++++++++++++++++++	
function easyFader($container, slideDur, fadeDur){

    $container[0].faderConfig = {};
    var slideSelector = '.slide',
        slideTimer,
        activeSlide,
        newSlide,
        $slides = $container.find(slideSelector),
        totalSlides = $slides.length,
        config = $container[0].faderConfig;
    config = {
        slideDur : slideDur,
        fadeDur : fadeDur   
    };  
    $slides.eq(0).css('opacity', 1);
    activeSlide = 0;
    $container.find('.page').bind('click',function(){
        var target = $(this).attr('data-target');
        clearTimeout(slideTimer);
        changeSlides(target);
    });
    function changeSlides(target){
        if(target == 'next'){
            newSlide = activeSlide + 1;
            if(newSlide > totalSlides - 1){ 
                newSlide = 0;
            }
        } else if(target == 'prev'){
            newSlide = activeSlide - 1;
            if(newSlide < 0){ 
                newSlide = totalSlides - 1;
            };
        } else {
            newSlide = target;
        };
        animateSlides(activeSlide, newSlide);
    };
    function animateSlides(activeNdx, newNdx){
        $slides.eq(activeNdx).css('z-index', 3);
        $slides.eq(newNdx).css({
            'z-index': 2,
            'opacity': 1
        });
        $slides.eq(activeNdx).animate({'opacity': 0}, config.fadeDur, function(){
            $slides.eq(activeNdx).removeAttr('style');
            activeSlide = newNdx;
            waitForNext();
        });
    };
    function waitForNext(){
        slideTimer = setTimeout(function(){
            changeSlides('next');   
        },config.slideDur);
    };
};

$(function(){
   easyFader($('#Fader'),5000,800);
});

		
});
