document.addEventListener('DOMContentLoaded', function () {
    const karusel = document.querySelector('.karusel');
    const images = document.querySelectorAll('.karusel-img');
    const imageWidth = images[0].clientWidth + 15;
    const imageCount = images.length;

    for (let i = 0; i < imageCount; i++) {
        const clone = images[i].cloneNode(true);
        karusel.appendChild(clone);
    }

    let currentPosition = 0;
    let tickSpeed = 20; 
    let speed = 1;
    const resetBefore = 3;
    const resetPoint = imageWidth * (imageCount - resetBefore);

    karusel.style.transition = 'transform 0.5s linear';

    setInterval(() => {
        currentPosition -= speed;

        if (Math.abs(currentPosition) >= resetPoint - (imageWidth * 1.5)) {
            karusel.style.transition = 'transform 0.3s ease-in'; // jemné dojetí
        }

        karusel.style.transform = `translateX(${currentPosition}px)`;

        if (Math.abs(currentPosition) >= resetPoint) {
           
            karusel.style.transition = 'none';
            currentPosition = 0;
            karusel.style.transform = `translateX(0px)`;

      
            void karusel.offsetWidth;

            karusel.style.transition = 'transform 0.5s linear';
        }
    }, tickSpeed);

    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const closeModal = document.querySelector('.close-modal');

    document.querySelectorAll('.karusel img').forEach(img => {
        img.addEventListener('click', function () {
            modal.style.display = 'flex';
            modalImg.src = this.src;
        });
    });

    closeModal.addEventListener('click', function () {
        modal.style.display = 'none';
    });

    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});
