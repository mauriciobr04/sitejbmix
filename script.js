window.addEventListener('scroll', function() {
    const scrollValue = window.scrollY;
    const img = document.getElementById('reflex-img');
    img.classList.toggle('reflex', scrollValue > 0);
});
