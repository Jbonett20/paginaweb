document.addEventListener("DOMContentLoaded", () => {
    const btn_entrar = document.getElementById('lg_entrar');

    btn_entrar.addEventListener('click', (e) => {
        e.preventDefault();
        login();

    })

});


function login() {
    const identification = document.getElementById('identification').value;
    const password = document.getElementById('Password').value;

    if (identification.length === 0 && password.length === 0) {
        alert('Por favor llene todos los campos');
        return;
    }

    if (identification.length === 0) {
        alert('Por favor ingrese su identificación');
        return;
    }

    if (password.length === 0) {
        alert('Por favor ingrese su clave');
        return;
    }

}