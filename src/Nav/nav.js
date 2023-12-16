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

const paginas = ["index", "loja"];
for (let index = 0; index < paginas.length; index++) {
    const element = paginas[index];
    if(window.location.href.includes("carrinho")){
        const pathCarrinho = document.querySelectorAll(`.pathcarrinho`);
        for(i=0; i < pathCarrinho.length; i++){
            pathCarrinho[i].style.fill = "red"
        }
        break;
    }else if(window.location.href.endsWith("/")){
        document.querySelector("#index a").style.color = "red"
    }else if(window.location.href.includes(element)){
        document.querySelector(`#${element} a`).style.color = "red";
        break;
    }
}