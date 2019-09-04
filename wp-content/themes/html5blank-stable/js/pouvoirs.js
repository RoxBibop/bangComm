var circle = document.querySelector('.circle-plus');

var content = document.querySelector('.p_contents');

var tag = document.querySelector('.p_tag');

function plusmoins() {
    circle.classList.toggle('opened');
    content.classList.toggle('visible');
    tag.classList.toggle('down');
}

circle.addEventListener('click', plusmoins);
console.log('slt c cool');