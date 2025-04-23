document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        
        answer.setAttribute('data-height', 'auto');
        
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                    const otherAnswer = otherItem.querySelector('.faq-answer');
                    
                    setTimeout(() => {
                        otherAnswer.style.maxHeight = '0';
                        otherAnswer.style.opacity = '0';
                        otherAnswer.style.transform = 'translateY(-20px)';
                    }, 10);
                }
            });
            
            
            if (isActive) {
                answer.style.maxHeight = '0';
                answer.style.opacity = '0';
                answer.style.transform = 'translateY(-20px)';
                setTimeout(() => {
                    item.classList.remove('active');
                }, 50);
            } else {
                item.classList.add('active');
                answer.style.maxHeight = '300px';
                answer.style.opacity = '1';
                answer.style.transform = 'translateY(0)';
            }
        });
    });
});