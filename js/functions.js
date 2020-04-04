// No Conflict
jQuery.noConflict();

jQuery(document).ready(function () {

    /*=============================================
    =                Hero Slider                  =
    =============================================*/
 
    var sliderMain = jQuery('#heroSlider');
    
    sliderMain.owlCarousel({
        items:1,
        rewind:true,
        animateOut: 'slideOutLeft',
        animateIn: 'slideInRight',
        lazyLoad : true,
        margin: 0,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true
    });

    /*=====        ./Hero Slider          ======*/

    /*=============================================
    =              Products Showcase              =
    =============================================*/

    var about = jQuery('#about').owlCarousel({
        items:3,
        loop:false,
        margin:15,
        responsive:{
            992:{
                items:3
            },
            768:{
                items:2
            },
            0:{
                items:1,
                center: true,
                margin: 0
            },
        }
    });

    /*=====     ./Products Showcase        ======*/

    /*=============================================
    =                Clients List                 =
    =============================================*/

    var clients = jQuery('#clients').owlCarousel({
        items:4,
        loop:false,
        margin:15,
        responsive:{
            992:{
                items:4
            },
            768:{
                items:3
            },
            0:{
                items:2
            },
        }
    });

    /*=====         ./Clients List          ======*/

    /*=============================================
    =            Admin Content Scroller           =
    =============================================*/

    jQuery('.admn-cont-scroller').owlCarousel({
        items:1,
        loop:true,
        margin: 5
    });

    /*=====   ./Admin Content Scroller   ======*/

    /*=============================================
    =               Text animation                =
    =============================================*/
    
    jQuery('h1, h2, h3, p, .slide-up').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 50,
        repeat: false
    });

    /*=====     ./Text animation          ======*/

    /*=============================================
    =           Add Bootstrap Classes             =
    =============================================*/
    
    jQuery("table").addClass("table table-bordered table-striped");
    
    /*=====    ./Add Bootstrap Classes      ======*/


    /*=============================================
    =             Strip empty p tags              =
    =============================================*/

    jQuery('p').each(function() {
        var $this = jQuery(this);
        if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
            $this.remove();
    });
    
    /*=====     ./Strip empty p tags       ======*/

    /*=============================================
    =               Skills Progress               =
    =============================================*/

    var a = 0;
    jQuery(window).scroll(function() {
        var oTop = jQuery('#team').offset().top - window.innerHeight;
        if (a == 0 && jQuery(window).scrollTop() > oTop) {
            jQuery('.progress-bar').each(function() {
                jQuery(this).find('.progress-content').animate({
                  width:jQuery(this).attr('data-percentage')
                },2000); 
                jQuery(this).find('.progress-number-mark').animate(
                  {left:jQuery(this).attr('data-percentage')},
                  {
                   duration: 2000,
                   step: function(now, fx) {
                     var data = Math.round(now);
                     jQuery(this).find('.percent').html(data + '%');
                   }
                });  
            });
            a = 1;
        }
    });

    /*=====    ./ Skills Progress        ======*/

    /*=============================================
    =                 Video Modal                 =
    =============================================*/

    var $videoSrc;  
    jQuery('.video-btn').click(function() {
        $videoSrc = jQuery(this).data( "src" );
    });
    // when the modal is opened autoplay it  
    jQuery('#introVideo').on('shown.bs.modal', function (e) {
        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        jQuery("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
    })
    // stop playing the youtube video when I close the modal
    jQuery('#introVideo').on('hide.bs.modal', function (e) {
        jQuery("#video").attr('src',$videoSrc); 
    }) 

    /*=====      ./ Video Modal          ======*/

    /*=============================================
    =               Policy Switch                 =
    =============================================*/

    jQuery('.box').hide();

    jQuery('input[type="radio"]').click(function(){
        var inputValue = jQuery(this).attr("value");
        var targetBox = jQuery("." + inputValue);
        jQuery(".box").not(targetBox).hide();
        jQuery(targetBox).show();
    });

    /*=====      ./ Policy Switch         ======*/

});

/* We want to preview images, so we need to register the Image Preview plugin */
FilePond.registerPlugin(
	
    // encodes the file as base64 data
    FilePondPluginFileEncode,
    
    // validates the size of the file
    FilePondPluginFileValidateSize,
    
    // corrects mobile image orientation
    FilePondPluginImageExifOrientation,
    
    // previews dropped images
    FilePondPluginImagePreview
);

// Select the file input and use create() to turn it into a pond
FilePond.create(
    document.getElementById('addImages')
);
