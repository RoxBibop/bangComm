var circle = document.querySelectorAll('.circle-plus');

var content = document.querySelectorAll('.p_contents');

var tag = document.querySelectorAll('.p_tag');

for (let i = 0; i < circle.length; i++) {
    
    function plusmoins() {
        circle[i].classList.toggle('opened');
        content[i].classList.toggle('visible');
        tag[i].classList.toggle('down');
    }
    
    circle[i].addEventListener('click', plusmoins);
    
}
