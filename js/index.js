window.onscroll = function() {
    let container = document.querySelector('.header__container');

    if (window.pageYOffset > 150) {
        container.classList.add('header__container_scrollDown');
    } else {
        container.classList.remove('header__container_scrollDown');
    }
}


setTimeout(function(){
	document.body.classList.add('body_visible');
}, 200);


$(document).ready(function() {
    $('a[href^="#"]').click(function() {
        let target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top-50
        }, 500);
    });
});


