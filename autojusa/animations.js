document.addEventListener('DOMContentLoaded', function () {
    const animateElements = () => {
        const elements = document.querySelectorAll('.branch-card, .service-card');
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (elementPosition < windowHeight - 100) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    };

    document.querySelectorAll('.branch-card, .service-card').forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'all 0.6s ease';
    });

    animateElements();
    window.addEventListener('scroll', animateElements);
});
