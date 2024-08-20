window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled-navbar');
        navbar.classList.remove('transparent-navbar');
    } else {
        navbar.classList.add('transparent-navbar');
        navbar.classList.remove('scrolled-navbar');
    }
});

// {{-- count number animation  --}}

window.addEventListener('load', function() {
const countNumbers = document.querySelectorAll('.count-number');

countNumbers.forEach(countNumber => {
    const target = parseInt(countNumber.getAttribute('data-target'));

    let currentNumber = 0;
    const counter = setInterval(() => {
    if (currentNumber < target) {
        currentNumber++;
        countNumber.textContent = currentNumber;
    } else {
        clearInterval(counter);
    }
    }, 30);
});
});