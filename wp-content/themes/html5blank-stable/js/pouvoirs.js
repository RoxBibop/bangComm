var circle = document.querySelectorAll('.circle-plus');

function plusmoins() {
    circle.classList.toggle('opened');
}

circle.addEventListener('click', plusmoins);
console.log('slt c cool');