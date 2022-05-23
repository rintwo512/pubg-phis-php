// kode untuk mengganti judul
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slider");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 3000);
}

// kode untuk melakukan spin
function spin() {
    document.getElementsByTagName("audio")[0].play();
    setTimeout(function() {
        $('.reward_confirmation').show();
    }, 3900);

    var $myElm = $(".spin");

    function rotate(degrees) {
        $myElm.css({
            '-webkit-transform': 'rotate(' + degrees + 'deg)',
            '-moz-transform': 'rotate(' + degrees + 'deg)',
            '-ms-transform': 'rotate(' + degrees + 'deg)',
            'transform': 'rotate(' + degrees + 'deg)'
        });
    }
    $({
        deg: 0
    }).animate({
        deg: 360 * 40
    }, {
        duration: 3900,
        step: function() {
            const lord = Math.random() * (360 - 1) + 1;
            var deg = this.deg;
            rotate(lord * 4);
        }
    });
}
setInterval(function time() {
    var d = new Date();
    var hours = 24 - d.getHours();
    var min = 60 - d.getMinutes();
    if ((min + '').length == 1) {
        min = '0' + min;
    }
    var sec = 60 - d.getSeconds();
    if ((sec + '').length == 1) {
        sec = '0' + sec;
    }
    jQuery('#waktu p').html(hours + ':' + min + ':' + sec)
}, 1000);

function klik1() {
    var audio = document.getElementById('klik1');
    audio.play();
}
$(document).ready(function(){
        $("o").attr("onclick", "klik1()");
});