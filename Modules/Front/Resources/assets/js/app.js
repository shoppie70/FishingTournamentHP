document.addEventListener('DOMContentLoaded', function () {
    const top_nav = document.querySelector('#top_nav');
    const header = document.querySelector('#header');

    window.addEventListener('scroll', function () {
        if (window.scrollY > header.clientHeight) {
            top_nav.classList.add('bg-gray-50', 'bg-opacity-70');
        } else {
            top_nav.classList.remove('bg-gray-50', 'bg-opacity-70');
        }
    })
});
