const openUp = document.getElementById('silka')
const closeUp = document.getElementById('close')
const popUp = document.getElementById('pop')
const openPopUp = document.getElementById('pikol')
const popUpOther = document.getElementById('pop_up')
const closeUpTwo = document.getElementById('close_up')













openUp.addEventListener('click', function (e) {
    e.preventDefault();
    popUp.classList.add('active');
})

closeUp.addEventListener('click', () => {
    popUp.classList.remove('active');
})

openPopUp.addEventListener('click', function (e) {
    e.preventDefault();
    popUpOther.classList.add('active');
})

closeUpTwo.addEventListener('click', () => {
    popUpOther.classList.remove('active');
})

$("[data-scroll]").on("click", function (event) {
    event.preventDefault();

    var blockId = $(this).data('scroll'),
        blockOffset = $(blockId).offset().top;

    $("html, body").animate({
        scrollTop: blockOffset
    }, 500);

})


$(document).ready(function () {
    $('.slider').slick({
        arrows: false,
        dots: true,
        speed: 1000,
        autoplay: false,
        initialSlide: 0,
        autoplaySpeed: 2500,
    })
});