
/*
 * Damn go to hell IE & Edge
 * https://teamtreehouse.com/community/background-attachment-is-messed-up-in-ie-and-microsoft-edge
 */
if(navigator.userAgent.match(/MSIE 10/i)
  || navigator.userAgent.match(/Trident\/7\./)
  || navigator.userAgent.match(/Edge/)) {
    $('body').on("mousewheel", function () {
        event.preventDefault();
        var wd = event.wheelDelta;
        var csp = window.pageYOffset;
        window.scrollTo(0, csp - wd);
    });
}

// We wait the page to be fully loaded
$( window ).load(function() {
    /*
     * Loader
     * - then we hide the loader
     */
    var loader = $('.loader');
    loader.delay(200).fadeTo("slow", 0, function() {
        loader.hide(onLoad);
    });
});

// We fire this function after the page has been fully loaded
// Inside callback of $( window ).load()
var onLoad = function() {
    /*
     * Navbar
     * - navbar is sticked to the top of the page when scrolling
     */
    $(window).scroll(function () {

        var navbar = $('.navbar');

        // Si le scroll est tout en haut de la page
        if ($(window).scrollTop() > 35) {
            if( ! navbar.hasClass('unstick') ) {
                navbar.addClass('unstick');
            }
        }
        // Si le scroll a dépassé le haut de la page
        else {
            if( navbar.hasClass('unstick') ) {
                navbar.removeClass('unstick');
            }
        }

    });
}();


/*
 * Contact form
 * - disable the contact form and use ajax request on submit
 */
$( "#contact-form" ).submit(function(e){
    e.preventDefault();
    console.log("Submited");

    $.post("", $("#contact-form").serialize(), function (data) {

        console.log(data);
        console.log($("#contact-form").serialize());

    });

});