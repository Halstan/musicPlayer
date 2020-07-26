const botones = document.querySelectorAll(".bEliminar");

botones.forEach(boton => {
    boton.addEventListener('click', function(){
        const id = this.dataset.id;
        
        const confirm = window.confirm('¿Desea eliminar este usuario ' + id + '?');

        if(confirm){
            httpRequest("http://localhost/Curso%20PHP/reproductorMusica/consultaUser/deleteUser/" + id, function(){
                document.querySelector(`#respuesta`).innerHTML = this.responseText;
                const tbody = document.querySelector('#tbodyUsers');
                const fila = document.querySelector('#fila-' + id);

                tbody.removeChild(fila);
            });
        }
    });
});

function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open('GET', url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 & this.status == 200){
            callback.apply(http);
        }
    }
}

//-------------------------------SCROLL---------------------------------

let block = false;
let page = 0;

window.onload = async function(){
    //CARGAR LOS ITEMS INICIALES
    loadItems();
}

window.addEventListener('scroll', async function(event){
    const scrollHeight = this.scrollY;
    const viewPortHeight = document.documentElement.clientHeight;
    const moreScroll = document.getElementById('moreAudios').offsetTop;
    const currentScroll = scrollHeight + viewPortHeight;

    //CARGAR MAS CONTENIDO
    if((currentScroll >= moreScroll) && block == false){
        block = true;
        this.setTimeout(() =>{
            loadItems();

            block = false;
        }, 500);
    }else{

    }
});

async function loadItems(){
    const data = await requestData(page);
    const response = data[0];

    if(response.response == '200'){
        const items = data[1];
        page = data[2].page;

        renderItems(items);
    }else if(response.response == '400'){
        console.error("No hay mas audios");
    }
}

function requestData(n){
    const url = 'http://localhost/Curso%20PHP/reproductorMusica/api/api.php?action=more&page=' + n;

    const response = this.fetch(url)
    .then(res => res.json())
    .then(data => data);

    return response;
}

function renderItems(data){
    let audios = document.querySelector('#audios');
    data.forEach(element => {
        audios.innerHTML += `<div class="audios">

        <div class="card w-75">
        <audio controls ontimeupdate="SeekBar()" ondurationchange="CreateSeekBar()" preload="auto">
        <source src="http://localhost/Curso%20PHP/reproductorMusica/uploads/${element.url}" type="audio/mpeg">
        <span class="name">${element.url}</span>
        </audio>
            <div class="card-body">
                <h5 class="card-title"><strong>Titulo:</strong> ${element.nombre}</h5>
                <p class="card-text">Fecha de subida: ${element.fecha_reg}</p>
                <p class="card-text">Descripcion: ${element.descripcion}</p>
                <p class="card-text">Subido por: ${element.id_user}</p>
            </div>
            </div>
            <br>
    </div>`
    });
}