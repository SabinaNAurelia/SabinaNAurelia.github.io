const result = window.confirm("We will go to REM Beauty website, do you want continue?");
if (result === true) {
    console.log("you can choose OK");
} else {
    console.log("Cancel or close the web");
}

document.addEventListener("DOMContentLoaded", function () {
    const toggler = document.getElementById("toggler");
    const navbar = document.querySelector(".navbar");

    toggler.addEventListener("change", function () {
        if (this.checked) {
            navbar.style.clipPath = "polygon(0 0, 100% 0, 100% 100%, 0 100%)";
        } else {
            navbar.style.clipPath = "polygon(0 0, 100% 0, 100% 0, 0 0)";
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const element = document.getElementById("h3");
    element.innerText += "rem.beauty";
});




