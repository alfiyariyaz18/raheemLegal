let intro = document.querySelector('.intro');
let logo = document.querySelector('.logo');
let logoSpan = document.querySelectorAll('.logo-parts');

window.addEventListener('DOMContentLoaded', () => {

    setTimeout(() =>{
        logoSpan.forEach((span, index) =>{
            setTimeout(() => {
                span.classList.add('active');
            }, (index + 3) * 300);
        });

        setTimeout(() =>{
            logoSpan.forEach((span, index) => {
                setTimeout(() => {
                    // span.classList.remove('active');
                    // span.classList.add('fade');
                }, (span + 1) * 6000);
            });
        }, 5000);    

        setTimeout(() =>{
            intro.style.top = '-100vh';
        }, 8000);

    });

});