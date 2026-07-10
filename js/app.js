if (document.querySelector(".mySwiper")) {

    const swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 2500
        }
    });

}

const btnInfo = document.getElementById('btnInfo');

btnInfo.addEventListener('click', () => {

    Swal.fire({
        title: 'Info',
        text: 'Information',
        icon: 'info'
    });
});

const menuToggle = document.getElementById('menuToggle');
const navbar = document.querySelector('.navbar');

menuToggle.addEventListener('click', () => {

    navbar.classList.toggle('active');

});