document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            const answer = this.nextElementSibling.querySelector('.faq-answer');
            answer.style.display = this.checked ? 'none' : 'block';
        });
    });
});