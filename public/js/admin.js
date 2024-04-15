const navBar = document.querySelector("nav")
const toggleNavBtn = document.querySelector("#toggle-nav-btn")

toggleNavBtn.addEventListener("click", (event) => {
    toggleNav()
})

function toggleNav() {
    if (navBar.classList.contains("nav-min")) {
        openNav()
    } else {
        closeNav()
    }
}

function openNav() {
    navBar.classList.remove("nav-min")
    navBar.classList.add("nav-max")
}

function closeNav() {
    navBar.classList.remove("nav-max")
    navBar.classList.add("nav-min")
}

// Medias
const phone = window.matchMedia("(width <= 480px)")

function media(e) {
    if (e.matches) {
        closeNav()
    } else {
        openNav()
    }
}

phone.addListener(media)


$(document).ready(function() {
    $('#carouselExampleSlidesOnly').carousel();
});

$('img[data-enlargable]').addClass('img-enlargable').click(function(){
    var src = $(this).attr('src');
    $('<div>').css({
        background: 'RGBA(0,0,0,.5) url('+src+') no-repeat center',
        backgroundSize: 'contain',
        width:'100%', height:'100%',
        position:'fixed',
        zIndex:'10000',
        top:'0', left:'0',
        cursor: 'zoom-out'
    }).click(function(){
        $(this).remove();
    }).appendTo('body');
});
