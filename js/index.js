$(function(){

    // Toggle full nav bar
    $( ".mobile-nav-toggler" ).click(function() {
        $(".mobile-nav-toggler").toggleClass("toggler-open");
        $(".navbar").toggleClass("hidden");
        $(".navbar-container").toggleClass("position-fixed");  
    })

    // Toggle sub menu
    $( ".menu-item-has-children" ).click(function() {
        $(".menu-item-has-children").toggleClass("opened-dropdown");
        $(".sub-menu").toggleClass("hidden");
    })
})