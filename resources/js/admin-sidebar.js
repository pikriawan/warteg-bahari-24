const sidebarShowButton = document.getElementById("sidebarShowButton");
const sidebarHideButton = document.getElementById("sidebarHideButton");
const sidebar = document.getElementById("sidebar");

sidebarShowButton.addEventListener("click", () => {
    sidebar.classList.add("show");
});

sidebarHideButton.addEventListener("click", () => {
    sidebar.classList.remove("show");
});
