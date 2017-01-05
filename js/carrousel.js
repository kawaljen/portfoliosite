/**
	CarrouselModule </br>
	Display content inside the page or in full page view </br>
	Version 1.0 </br>
	@module Carrousel
	@main Carrousel
**/

/* global Main*/

(function(win, doc) {
/**
	Carrousel Class <br/>
  Example Carrousel: <a target="_blank" href=""</a>
	@class Carrousel
	@constructor
**/
 function Carrousel (options) {

    var that = {},
        self = {};
    self.options = {
  			/**
  				It is the parent div where the video will be created. <br/>
  				String or DOM Object are accepted.
  				@property wrapper
  				@type {String or DOM Object}
  			**/
        wrapper: 'slider',

        /**
          Name of the Carrousel Slide
          @property carrouselSlides
          @type {String}
        **/
        carrouselSlides : 'slide',

        /**
          Name of the Carrousel Slide img
          @property carrouselSlidesImg
          @type {String}
        **/
        carrouselSlidesImg : 'slide-img',

        /**
         next button css class
         @property nextButtonCssClass
         @type {String}
         **/
        nextButtonCssClass: 'slider--next',

        /**
         prev button css class
         @property prevButtonCssClass
         @type {String}
         **/
        prevButtonCssClass: 'slider--prev',

        /**
         slide Nav css class
         @property slideNavCssClass
         @type {String}
         **/
        slideNavCssClass : 'navigation__item',

        /**
         slide Nav css class
         @property slideNavCssClass
         @type {String}
         **/
        slideNavTipWrap : 'navigation__list',

      	/**
  				Default value to show basic control in the carrousel
  				@property showBasicControls
  				@type {Boolean}
  			**/
  			showBasicControls: true,

  			/**
  				Default value to indicate if the carrousel is autoplay
  				@property autoPlay
  				@type {Boolean}
  			**/
  			autoPlay: false,

  			/**
  				Default value to indicate if the carrousel has to preload. The values are: auto, all.
  				@property preload
  				@type {Boolean}
  			**/
  			preload: 'auto',

        /**
  				Call this function when the carrousel is initiated
  				@property callBackInitFunction
  				@type {Function}
  			**/
  			callBackInitFunction: null,

  			/**
  				Call this function when the carrousel is playing
  				@property callBackPlayFunction
  				@type {Function}
  			**/
  			callBackSlideFunction: null,

  			/**
  				Call back when seeked event is fired
  				@property callBackSeekedFunction
  				@type {Function}
  			**/
  			callBackSeekedFunction: null,

        /**
         carrousel images max size
         @property imgSize
         @type {String}
         **/
        imgSize : '',

        /**
         Get optimised Images
         @property responsiveImages
         @type {Boolean}
         **/
        responsiveImages : false,

        /**
         Match media destop
         @property matchMediaDestop
         @type {string}
         **/
        matchMediaDestop : '(min-width: 1200px)',

        /**
         Match media tablet
         @property matchMediaTablet
         @type {string}
         **/
        matchMediaTablet : '(min-width: 768px)',
  	};

    self.priv= {
        currentIndex : 0,
        openedSlide : [],
        $slideNav : []
    };
    for (var i in options) { self.options[i] = options[i]; }
    for (var i in  self.options) { self.priv[i] = self.options[i]; }


  /** PUBLIC METHODS **/

 /**
   Initializing Carrousel Class
   @private
   @method __init
   @param {String or DOM Object} el
   @param {Array} options
   @return {null}
 **/
   that.init = function() {
        self.priv2 ={
             $carrouselSlides : $('.'+self.priv['carrouselSlides']),
             currentIndex : 0,
             openedSlide:[],
             $nextButton : $('.'+self.priv['nextButtonCssClass']),
             $prevButton : $('.'+self.priv['prevButtonCssClass']),
             $carrouselSlidesImg : $('.'+self.priv['carrouselSlides'] + ' img'),
             $wrapper : $('.'+ self.priv['wrapper']),
             $wrapperSecond : $('.teaser-content'),
             $slideNavTipWrap : $('.'+self.priv.slideNavTipWrap),
             mqd : window.matchMedia(self.priv.matchMediaDestop),
             mqt : window.matchMedia(self.priv.matchMediaTablet)
         };
         for (var i in  self.priv2) { self.priv[i] = self.priv2[i]; }
         self.priv.slidesLength = self.priv.$carrouselSlides.length;

        //  __handleMatchMediaDesktop(self.priv.mqd);
        //  __handleMatchMediaTablet(self.priv.mqt);

         //Controls
         if(!self.priv['showBasicControls']) {
            self.priv.$wrapper.addClass('hide-control')
         }

         for(var i =0; i < self.priv.slidesLength; i++){
           var li = $('<li/>')
              .addClass(self.options.slideNavCssClass)
              .appendTo(self.priv.$slideNavTipWrap);
         }
         self.priv.$slideNav = $('.'+self.options.slideNavCssClass);


         //Init wrappers css
         self.priv.$wrapper.css('width', self.priv.slidesLength * 100 + '%');
         self.priv.$carrouselSlides.css('width', 100 / self.priv.slidesLength + '%');

          //Controle loading of images
         if (self.priv['preload'] === 'all') {
           for( var i =0; i < self.priv.slidesLength ; i++){  __setStyles(self.priv.$carrouselSlides.eq(i).index());}
         }
         else {
           __setStyles();
           __load(self.priv.currentIndex + 1);
         }

         if(self.priv['autoPlay']) {
           __StartAutoplay ();
         }

         __addingListeners();

        if(self.priv['callBackInitFunction'] != null) {
            self.priv['callBackInitFunction'].call(this);
        }

     };

   /**
     Exit Carrousel
     @method exit
     @return {null}
   **/
   that.exit = function () {
     self.priv.currentIndex = self.priv['currentIndex'];
     self.priv.openedSlide = [];
   };

   /** PRIVATE METHODS **/

   /**
     Adding the listeners
     @private
     @method __addingListeners
     @return {Null}
   **/
   function __addingListeners () {

     self.priv.$prevButton.click(function(){
       isLeft=true;
       goThere(isLeft);
     });
     self.priv.$wrapper.on("swipeleft",function(){
       isLeft=true;
       goThere(isLeft);
     });
     self.priv.$nextButton.click(function(){
       isLeft=false;
       goThere(isLeft);
     });
     self.priv.$wrapper.on("swiperight",function(){
       isLeft=false;
       goThere(isLeft);
     });

     self.priv.$slideNav.click(function(){
       if(self.priv.autoPTimeout){
         __StopAutoplay ();
         self.priv.currentIndex = $(this).index();
         __goTo();
         __StartAutoplay ();
       }
       else {
         self.priv.currentIndex = $(this).index();
         __goTo();       
       }

      //  if(self.priv['callBackSeekedFunction'] != null) {
      //      self.priv['callBackSeekedFunction'].call(this);
      //  }
     });

     $('#slider--trigger').click(function(){
       if($(this).hasClass('play')){
         $(this).attr('class', 'pause');
         __StartAutoplay ();
       }
       else {
         $(this).attr('class', 'play');
         __StopAutoplay ();
       }
     });
   }

   function goThere(isLeft){
     if(!self.priv.autoPTimeout){
       __goTo(isLeft);
     }
     else{
       __StopAutoplay ();
       __goTo(isLeft);
       __StartAutoplay ();
     }
   }

    function __setStyles () {
      __load();
      __resetButtons();
      __updatePositionMarker();
    };

    /**
       StartAutoplay
      @method  __updatePositionMarker
      @param {null}
      @return self.priv.autoPTimeout
    **/

    function __StartAutoplay () {
        self.priv.autoPTimeout = setInterval(function(){
          __goTo(false);
        }.bind(self), 7000);
    };

    /**
       __StopAutoplay
      @method  __updatePositionMarker
      @param {null}
      @return self.priv.autoPTimeout
    **/

    function __StopAutoplay () {
        clearInterval(self.priv.autoPTimeout);
        self.priv.autoPTimeout = 0;
    };

    /**
       updatePositionMarker
      @method  __updatePositionMarker
      @param {array} slides
      @param {String} imgSize
      @return {null}
    **/
     function __updatePositionMarker () {
       self.priv.$slideNav.removeClass('is__active');
       self.priv.$slideNav.eq(self.priv.currentIndex).addClass('is__active');
     };

    /**
      resetButtons
      @method  __resetButtons
      @param {array} slides
      @param {String} imgSize
      @return {null}
    **/
   function __resetButtons() {
      self.priv.$nextButton.addClass('show-button');
      self.priv.$prevButton.addClass('show-button');

      if( self.priv.currentIndex < 1 ){
        self.priv.$prevButton.removeClass('show-button');
      }
      else if(self.priv.currentIndex >= self.priv.$carrouselSlides.length-1){
        self.priv.$nextButton.removeClass('show-button');
      }
    }

    /**
      Go to
      @private
      @method __goTo
      @param {array} isleft (is going to the left?)
      @return {null}
    **/
    function __goTo (isLeft) {
        // __load(self.priv.currentIndex + 1);
        // self.priv.$slideNav.css('transform', 'scale(0.93)');
        // setTimeout(function(){
          if(typeof isLeft != 'undefined'){
            if(isLeft){
              self.priv.currentIndex--;
            }
            else{
              if(self.priv.currentIndex >= self.priv.slidesLength-1){
                self.priv.currentIndex = 0;
              }
              else {
                 self.priv.currentIndex++;
              }
            }
          }

          self.priv.$wrapper.css('transform', 'translate3d('+(-self.priv.currentIndex * (100/ self.priv.slidesLength)) +'%, 0, 0px)');
          // self.priv.$wrapperSecond.css('transform', 'scale(1)');
          __setStyles();

          if(self.priv['callBackSlideFunction'] != null) {
              self.priv['callBackSlideFunction'].call(this);
          }
        // }.bind(this), 200);
    }



    /**
      Load
      @method  __load
      @param {Number} slides
      @return {null}
    **/
     function __load(slides) {
         var i = typeof slides !== 'undefined'? slides : self.priv.currentIndex;
         if( $.inArray(i, self.priv.openedSlide)<0){
           var thisImg = self.priv.$carrouselSlidesImg.eq(i);

           var imgSrc = thisImg.data('src');
           thisImg.attr('src', "porto/"+ imgSrc );
           var srcSet = "porto/"+ imgSrc+" 400w," + " porto/650-" + imgSrc + " 500w,"+ " porto/800-" + imgSrc + " 650w";
           thisImg.attr('srcset', srcSet);

          //  if(self.priv.responsiveImages){
          //    img = img + '-'+ self.priv.imgSize;
          //  }

           self.priv.openedSlide.push(i);
         }
     }



     /**
       handleMatchMediaDesktop
       @method  __handleMatchMediaDesktop
       @param {Object} mql
       @return {null}
     **/
   function __handleMatchMediaDesktop(mql){
     if(mql.matches)
        self.priv.desktop = true;
    else
        self.priv.desktop = false;

    if(self.priv.responsiveImages){
        getRespImageSuffix();
    }
   }

   /**
     handleMatchMediaTablet
     @method  __handleMatchMediaTablet
     @param {Object} mql
     @return {null}
   **/
   function __handleMatchMediaTablet(mql){
     if(mql.matches)
            self.priv.tablet = true;
     else
            self.priv.tablet = false;

      if(self.priv.responsiveImages){
          __getRespImageSuffix();
      }
   }

   return that;
};


$(document).ready(function() {
  main =  new Carrousel({ callBackInitFunction : function(){console.log('tested');}, autoPlay : true });
  main.init();
});
})(window, document);
