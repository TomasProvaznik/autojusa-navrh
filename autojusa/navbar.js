document.addEventListener('DOMContentLoaded', function () {
    // Přidání Montserrat fontu
    const link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap';
    document.head.appendChild(link);

    const nav = document.querySelector('nav');
    const hamburger = document.querySelector('.hamburger');

    // Hamburger toggle
    hamburger.addEventListener('click', function () {
        nav.classList.toggle('active');
    });

    // Dropdown toggle (mobilní zařízení)
    if (window.innerWidth <= 768) {
        const menuItems = document.querySelectorAll('nav ul li');
        menuItems.forEach(item => {
            const subMenu = item.querySelector('ul');
            if (subMenu) {
                item.addEventListener('click', function (e) {
                    const link = item.querySelector('a');
                    if (e.target === item || e.target === link) {
                        e.preventDefault();
                        this.classList.toggle('active');
                    }
                });
            }
        });
    }

    // Změna vzhledu při scrollu
    window.addEventListener('scroll', () => {
        const topInfoBar = document.querySelector('.top-info-bar');
        if (window.scrollY > 50) {
            nav.classList.add('scrolled');
            if (topInfoBar) topInfoBar.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
            if (topInfoBar) topInfoBar.classList.remove('scrolled');
        }
    });
});
