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