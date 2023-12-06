let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

document.querySelectorAll('.image-slider img').forEach(images => {
    images.onclick = () => {
        var src = images.getAttribute('src');
        document.querySelector('.main-home-image').src = src;
    };
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
    grabCursor: true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        }
    },
});

// POP UP
document.getElementById('openPopupBtn').addEventListener('click', function() {
    // Menampilkan pop-up
    document.getElementById('popup').style.display = 'block';

    // Mengatur waktu durasi munculnya pop-up (misalnya, 5 detik)
    setTimeout(function() {
        document.getElementById('popup').style.display = 'none';
    }, 3000); // Mengatur waktu durasi dalam milidetik (5 detik dalam contoh ini)
});

