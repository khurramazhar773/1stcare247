document.addEventListener("DOMContentLoaded", function () {
    const dropdownIcons = document.querySelectorAll(".dropdown-icon");
    dropdownIcons.forEach(icon => {
        icon.addEventListener("click", function (event) {
            event.preventDefault();
            event.stopPropagation();
            targetDropdown.classList.toggle("show");
            document.querySelectorAll(".dropdown-menu").forEach(menu => {
                if (menu !== targetDropdown) {
                    menu.classList.remove("show");
                }
            });
        });
    });
    document.addEventListener("click", function () {
        document.querySelectorAll(".dropdown-menu").forEach(menu => {
            menu.classList.remove("show");
        });
    });
});
