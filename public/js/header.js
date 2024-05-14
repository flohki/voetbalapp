function showSidebar() {
    document.querySelector('.sidebar').style.display = 'block';
}

function hideSidebar() {
    document.querySelector('.sidebar').style.display = 'none';
}

document.addEventListener('DOMContentLoaded', function () {
    const accordions = document.querySelectorAll('.accordion-header');

    accordions.forEach(function (accordion) {
        accordion.addEventListener('click', function () {
            const content = this.nextElementSibling;
            this.classList.toggle('active');
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    });

    // Event listeners for the sidebar
    document.querySelector('.menu-button').addEventListener('click', showSidebar);
    document.querySelector('.sidebar li:first-child a').addEventListener('click', hideSidebar);
});
