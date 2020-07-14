name = document.getElementById('name');
lastName = document.getElementById('lastName');
email = document.getElementById('email');
pass = document.getElementById('pass');
error = document.getElementById('error');

function validation() {

    if(name.value === null || name.lenght === 0 || /^\s+$/.test(name.value)){
        error.textContent = '[ERROR] El campo correo debe tener una direccion de valida';
        return false;
    }
    
    if(lastName.value === null || lastName.lenght === 0 || /^\s+$/.test(lastName.value)){
        error.textContent += '[ERROR] El campo apellido debe estar lleno';
        return false;
    }

    if(pass.value === null || pass.lenght === 0 || /^\s+$/.test(pass.value)){
        error.textContent += '[ERROR] El campo contraseña debe estar lleno';
        return false;
    }

    if(!(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email.value))){
        error.textContent += '[ERROR] El campo correo debe tener una direccion de valida';
        return false;
    }
    
    return true;
    
}