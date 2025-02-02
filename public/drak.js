document.addEventListener('DOMContentLoaded', function() {
    const darkModeToggle = document.querySelector('.dark-mode-toggle');
    const body = document.body;
    const navbar = document.querySelector('.navbar');
    const navLinks = document.querySelectorAll('.nav-link');
    const offcanvasBody = document.querySelector('.offcanvas-body');
    const title = document.querySelector('h1.title');
    const subTitle = document.querySelector('h3.sub-title');
    const btnk = document.querySelector('.btnk');
    const typing = document.querySelector('.typing');

    // Function to apply dark mode
    function applyDarkMode() {
        body.classList.add('dark-mode');
        navbar.classList.add('dark-mode');
        navLinks.forEach(link => link.classList.add('dark-mode'));
        offcanvasBody.classList.add('dark-mode');
        title.classList.add('dark-mode');
        subTitle.classList.add('dark-mode');
        btnk.classList.add('dark-mode');
        typing.classList.add('dark-mode');
    }

    // Function to remove dark mode
    function removeDarkMode() {
        body.classList.remove('dark-mode');
        navbar.classList.remove('dark-mode');
        navLinks.forEach(link => link.classList.remove('dark-mode'));
        offcanvasBody.classList.remove('dark-mode');
        title.classList.remove('dark-mode');
        subTitle.classList.remove('dark-mode');
        btnk.classList.remove('dark-mode');
        typing.classList.remove('dark-mode');
    }

    // Check local storage for dark mode preference
    if (localStorage.getItem('darkMode') === 'enabled') {
        applyDarkMode();
    }

    darkModeToggle.addEventListener('click', function() {
        if (body.classList.contains('dark-mode')) {
            removeDarkMode();
            localStorage.setItem('darkMode', 'disabled');
        } else {
            applyDarkMode();
            localStorage.setItem('darkMode', 'enabled');
        }
    });
});
