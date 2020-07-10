const botones = document.querySelectorAll(".bEliminar");

botones.forEach(boton => {
    boton.addEventListener('click', function(){
        const id = this.dataset.id;
        
        const confirm = window.confirm('¿Desea eliminar este usuario ' + id + '?');

        if(confirm){
            httpRequest("http://localhost/Curso%20PHP/Reproductor%20musica/consultaUser/deleteUser/" + id, function(){
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