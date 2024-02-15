 document.addEventListener("DOMContentLoaded", function () {
    var dropnames = document.querySelectorAll('.dropname');

    dropnames.forEach(function (collapsible) {
        collapsible.addEventListener("click", function () {
            var dropdownContent = this.nextElementSibling;
            collapsible.classList.toggle("dropmenu");
            dropdownContent.style.display = (collapsible.classList.contains("dropmenu")) ? 'block' : 'none';
        });
    });
});