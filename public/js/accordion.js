document.addEventListener('DOMContentLoaded', function () {
    const accordions = document.querySelectorAll('.accordion-header');

    accordions.forEach(function (accordion) {
        accordion.addEventListener('click', function () {
            const content = this.nextElementSibling;

            // Toggle the active class on the header
            this.classList.toggle('active');

            // Check if the content is already open
            if (content.style.maxHeight) {
                // Close the content
                content.style.maxHeight = null;
            } else {
                // Open the content
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    });
});
