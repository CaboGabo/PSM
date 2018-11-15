var slideIndex = 1;
var elementos = 0;
showDivs(slideIndex, elementos);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function currentDiv(n, e) {
    showDivs(slideIndex = n, elementos = e);
}

function showDivs(n, e) {
    var i;
    var x = document.getElementsByClassName("mySlides");

    for (let j = 0; j < elementos; j++) {
        document.getElementById(`nombre${j}`).classList.add('oculto');
        document.getElementById(`modelo${j}`).classList.add('oculto');
        document.getElementById(`descripcion${j}`).classList.add('oculto');
        document.getElementById(`precio${j}`).classList.add('oculto');
        document.getElementById(`iva${j}`).classList.add('oculto');
        document.getElementById(`total${j}`).classList.add('oculto');
    }
    if (elementos > 0) {
        document.getElementById(`nombre${n-1}`).classList.remove('oculto');
        document.getElementById(`modelo${n-1}`).classList.remove('oculto');
        document.getElementById(`descripcion${n-1}`).classList.remove('oculto');
        document.getElementById(`precio${n-1}`).classList.remove('oculto');
        document.getElementById(`iva${n-1}`).classList.remove('oculto');
        document.getElementById(`total${n-1}`).classList.remove('oculto');
    }

    if (n > x.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = x.length }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex - 1].style.display = "flex";
}