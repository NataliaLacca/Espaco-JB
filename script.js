// passo 1 - pegar os elementos que representam a lista no HTML
const list = document.querySelectorAll(".list");

list.forEach(list => {
    // passo 2 - identificar o clique no elemento da lista
    list.addEventListener("click", function() {

        if(list.classList.contains("selecionado")){
            return;
        }

        selecionarList(list)
        mostrarInformacoesDaList(list)
    });
});

function selecionarList(list) {
    // passo 3 - quando o usuário clicar, desmarcar a lista selecionada
    const listSelecionado = document.querySelector(".list.selecionado");
    listSelecionado.classList.remove("selecionado");

    // passo 4 - marcar a lista clicada como selecionado
    list.classList.add("selecionado");
}

function mostrarInformacoesDaList(list){
    // passo 5 - esconder o conteúdo anterior
    const informacaoSelecionado = document.querySelector(".informacao.selecionado");
    informacaoSelecionado.classList.remove("selecionado");

    // passo 6 - mostrar o conteúdo da aba selecionada
    const idDoElementoDeInformacoesDaList = `informacao-${list.id}`

    const informacaoASerMostrada = document.getElementById(idDoElementoDeInformacoesDaList)
    informacaoASerMostrada.classList.add("selecionado")
}

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

function myFunction() {
  document.getElementById("myLocalDate").required = true;
  document.getElementById("demo").innerHTML = "The required property was set. The datetime field must now be filled out before submitting the form.";
}