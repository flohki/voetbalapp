document.addEventListener('DOMContentLoaded', function () {
    var accordions = document.querySelectorAll('.accordion-header');

    accordions.forEach(function (accordion) {
        accordion.addEventListener('click', function () {
            var content = this.nextElementSibling;
            this.classList.toggle('active');
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    });
});
