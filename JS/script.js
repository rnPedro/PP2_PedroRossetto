const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector(".nav");

hamburger.addEventListener("click", () => nav.classList.toggle("active"));

function mostrarConteudo(id) {
    var conteudo = document.getElementById(id).querySelector('.conteudo');
    if (conteudo.style.display === 'none' || conteudo.style.display === '') {
        conteudo.style.display = 'block';
    } else {
        conteudo.style.display = 'none';
    }
}

