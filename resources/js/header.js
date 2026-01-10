function toggleMobileNavbar(mobileNavbarToggle, mobileNavbar) {
    if (mobileNavbar.classList.contains("show")) {
        mobileNavbarToggle.innerHTML = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"lucide lucide-text-align-justify-icon lucide-text-align-justify\"><path d=\"M3 5h18\"/><path d=\"M3 12h18\"/><path d=\"M3 19h18\"/></svg>";
    } else {
        mobileNavbarToggle.innerHTML = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"lucide lucide-x-icon lucide-x\"><path d=\"M18 6 6 18\"/><path d=\"m6 6 12 12\"/></svg>";
    }

    mobileNavbar.classList.toggle("show");
}

const mobileNavbarToggle = document.getElementById("mobileNavbarToggle");
const mobileNavbar = document.getElementById("mobileNavbar");

mobileNavbarToggle.addEventListener("click", () => {
    toggleMobileNavbar(mobileNavbarToggle, mobileNavbar);
});
