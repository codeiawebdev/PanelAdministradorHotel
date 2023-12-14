const asideElement = document.getElementById("menu-aside");
const botonElement = document.getElementById("menu-boton");


botonElement.addEventListener("click", () => {
    asideElement.classList.toggle("d-none");
    asideElement.classList.toggle("d-lg-block");
});

window.addEventListener('resize', function () {
    if (window.innerWidth > 991) {
        if (!asideElement.classList.contains("d-none", "d-lg-block")) {
            asideElement.classList.add("d-none", "d-lg-block");
        }
    } 
});