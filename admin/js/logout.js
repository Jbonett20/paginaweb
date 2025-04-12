document.addEventListener("DOMContentLoaded", () => {

 const btn_logout = document.getElementById('btn_logout').addEventListener('click',()=>{
  logout()
 })
});

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
