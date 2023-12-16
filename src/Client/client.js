const NavLupa = document.getElementById("NavLupa");
const NavLupaInput = document.querySelector("#NavLupa input");

document.querySelector("#NavLupa").addEventListener("mouseover", function () {
    NavLupa.style.border = "2px solid white";
    NavLupa.style.padding = "2px 10px";
    NavLupa.style.transition = "1s"
    NavLupaInput.style.opacity = "1";
    NavLupaInput.style.display = "revert";
})
document.querySelector("#NavLupa").addEventListener("mouseout", function () {
    NavLupa.style.border = "0px solid white";
    NavLupa.style.padding = "0px 0px";
    NavLupa.style.transition = "0.2s"
    NavLupaInput.style.opacity = "0";
    NavLupaInput.style.display = "none";
})