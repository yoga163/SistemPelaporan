//event pada saat link di klik//
$(document).ready(function(){
    $('.page-scroll').on('click', function(e){

        //ambil isi href
        var href = $(this).attr('href');
        //tangkap elemen
        var elemen = $(href);

        $('html').animate({
            scrollTop: $(elemen).offset().top - 100
        },800 , 'easeInOutExpo');

        e.preventDefault();

    });

    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
        x.type = "text";
        } else {
        x.type = "password";
        }
    } 
    

});

$(document).scroll(function () {
    var $nav = $(".navbar");
    $nav.toggleClass('scrolled', $(this).scrollTop() > 10);
});


