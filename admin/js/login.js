document.addEventListener("DOMContentLoaded", () => {
    const btn_entrar = document.getElementById('lg_entrar');
    btn_entrar.addEventListener('click', (e) => {
        e.preventDefault();
        login();

    })
 const btn_logout = document.getElementById('btn_logout').addEventListener('click',()=>{
  logout()
 })
});


function login() {
    const identification = document.getElementById('identification').value;
    const password = document.getElementById('password').value;

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

    const datos = {
        identification,
        password
    };

    $.ajax({
        type: "POST",
        url: "controller/login.php",
        data: datos,
        dataType: "json", // correcto
        success: function (response) {
            if (response.success) {
                window.location.href = response.redirect;
            } else {
                alert(response.message);
            }
        },
        error: function (xhr, status, error) {
            console.error("Error AJAX:", status, error);
        }
    });
}

function logout() {
    $.ajax({
        type: "POST",
        url: "controller/logout.php",
        success: function (response) {
            if (response.success) {
                window.location.href = response.redirect;
            } else {
                alert("No se pudo cerrar la sesión.");
            }
        },
        error: function (xhr, status, error) {
            console.error("Error al cerrar sesión:", status, error);
        }
    });
}
