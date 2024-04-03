import './bootstrap';



document.addEventListener("DOMContentLoaded", () => {
    const mainMenuItems = document.querySelectorAll("#main-menu button");

    mainMenuItems.forEach((item) => {
        item.addEventListener("click", () => handleItemClick(item));
    });

    function handleItemClick(clickedItem) {
        const targetId = clickedItem.dataset.target;
        const targetName = clickedItem.dataset.tip;

        const subMenus = document.querySelectorAll(".sub-menu");

        document.querySelector("#menu-title").textContent = targetName;

        subMenus.forEach((subMenu) => {
            subMenu.classList.toggle("tw-active-menu", subMenu.id === targetId);
        });

        mainMenuItems.forEach((item) => {
            item.classList.remove("tw-active-menu-btn");
        });

        clickedItem.classList.add("tw-active-menu-btn");
    }
});
