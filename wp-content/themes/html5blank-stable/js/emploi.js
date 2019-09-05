var fonrouge = document.querySelector(".e_fonrouge2");
var colbtn = document.querySelector(".e_fonrouge");

function effect()
{
    fonrouge.classList.add("aaa")
}
function offect()
{
    fonrouge.classList.remove("aaa")
}

colbtn.addEventListener("mouseover", effect);
colbtn.addEventListener("mouseout", offect);
