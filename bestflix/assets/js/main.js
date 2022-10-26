function showModal(idModal){ 
    //idModal é usado para avisar que há um parâmetro lá no html, o texto pode ser qualquer coisa para avisar que o parâmetro será um texto.
    const modal = document.querySelector(idModal)
    modal.style.display = "flex"
}

function hideModal(idModal, event) {
    if(event.target.className === 'modal'){
        const modal = document.querySelector(idModal)
        modal.style.display = 'none'
    }
}
//forçar o fechamento após receber a mensagem de alerta
function closeAllModal() {
    const modais = document.querySelectorAll('.modal') // irá pegar todas as classes modal.
    modais.forEach(modal => { //ele irá passar como se fosse um laço um por um, ou seja, se tiver 5 modais ele irá rodar 5 vezes.
        modal.style.display = 'none'
    })
}

//toda a resposta através do servidor:
async function insert(event) {
    event.preventDefault() //tira a forma padrão, e não recarrega a página.
    const formData = new FormData(event.target)
    const response = await fetch('backend/insert.php', { //await informa que tem que aguardar.
        method: 'POST',
        body: formData
    })
    const result = await response.json() //await informa que tem que aguardar.
    if (result?.success) {
        closeAllModal() 
        alert('Seu filme '+result.data.title+' foi cadastrado com sucesso!')
        loadProductions()
    }
}

async function loadProductions(){
    const response = await fetch("backend/list.php")
    const result = await response.json()
    if (result?.success) {
        const listProductions = document.querySelector('#productions')
        listProductions.innerHTML = ''
        const filmes = result.data
        filmes.map((film) => {
            listProductions.innerHTML += `
            <div class="card-movie">
                    <a href="filme">
                        <div class="mask"></div>
                        <img src="${film.capa}" alt="${film.titulo}">
                        <div>
                            <h2>${film.titulo}</h2>
                            <p>${film.categoria}</p>
                        </div>
                    </a>
                </div>
            `
        })
    } else {
        alert('Erro ao carregar produções')
    }
}