/********************************************************
 ThemeTim
 Version:   1.0.0
 ********************************************************/
jQuery(function(){
    /*******************************************************************************
     * Body Animation
     *******************************************************************************/
    if(jQuery('.animsition').length){
        jQuery(".animsition").animsition({
            inClass: 'fade-in',
            outClass: 'fade-out',
            inDuration: 1500,
            outDuration: 800,
            linkElement: '.primary-menu ul li a',
            // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
            loading: true,
            loadingParentElement: 'body', //animsition wrapper element
            loadingClass: 'animsition-loading',
            loadingInner: '', // e.g '<img src="loading.svg" />'
            timeout: false,
            timeoutCountdown: 5000,
            onLoadEvent: true,
            browser: [ 'animation-duration', '-webkit-animation-duration'],
            // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
            // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
            overlay : false,
            overlayClass : 'animsition-overlay-slide',
            overlayParentElement : 'body',
            transition: function(url){ window.location.href = url; }
        });
    }
    /*******************************************************************************
     * Smooth Scroll
     *******************************************************************************/
    jQuery.srSmoothscroll({
        step: 95,
        speed: 600,
        ease: 'swing',
        target: jQuery('body'),
        container: jQuery(window)
    })

});