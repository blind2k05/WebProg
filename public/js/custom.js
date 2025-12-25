document.addEventListener('DOMContentLoaded', function () {

    /* ===== SIDEBAR ===== */
    const hamburger = document.getElementById('hamburger');
    const sidebar   = document.getElementById('sidebar');
    const overlay   = document.getElementById('overlay');

    if (hamburger && sidebar && overlay) {
        hamburger.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.remove('active');
            overlay.classList.remove('active');
        });
    }

    /* ===== POPULAR SWIPER ===== */
    if (document.querySelector('.popularSwiper')) {
        new Swiper('.popularSwiper', {
        slidesPerView: 5,
        spaceBetween: 24,
        loop: true,
        // watchOverflow: false,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    }

    const paymentItems = document.querySelectorAll('.payment-item');
    const paymentInput = document.getElementById('payment_method');

    paymentItems.forEach(item => {
        item.addEventListener('click', () => {
            paymentItems.forEach(i => i.classList.remove('active'));
            item.classList.add('active');
            paymentInput.value = item.dataset.method;
        });
    });

});
