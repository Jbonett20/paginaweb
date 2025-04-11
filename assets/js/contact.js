document.getElementById('form_contact').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const form = this;
    const formData = new FormData(form);
    const submitBtn = document.getElementById('btn_env_contact');
    const loading = form.querySelector('.loading');
    const errorMsg = form.querySelector('.error-message');
    const sentMsg = form.querySelector('.sent-message');

    // Mostrar loading y ocultar otros mensajes
    loading.style.display = 'block';
    errorMsg.style.display = 'none';
    sentMsg.style.display = 'none';
    submitBtn.disabled = true;

    fetch(form.action, {
        method: 'POST',
        body: formData,
        headers: {
            'Accept': 'application/json'
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Error en la respuesta del servidor');
        }
        return response.text().then(text => {
            // Caso específico para respuestas con formato: Error: {"success":true,...}
            if (text.startsWith('Error: {')) {
                try {
                    const jsonData = JSON.parse(text.substring(7)); // Elimina "Error: "
                    return {
                        success: jsonData.success,
                        message: jsonData.message
                    };
                } catch (e) {
                    console.error('Error parsing JSON:', e);
                }
            }
            
            // Intentar parsear como JSON directo
            try {
                const jsonData = JSON.parse(text);
                return {
                    success: jsonData.success,
                    message: jsonData.message
                };
            } catch (e) {
                console.error('Error parsing JSON:', e);
            }
            
            // Si todo falla, mostrar mensaje basado en contenido
            return {
                success: text.includes('correctamente'),
                message: text.includes('correctamente') ? 
                    'Mensaje enviado correctamente' : 
                    'Error al enviar el mensaje'
            };
        });
    })
    .then(data => {
        loading.style.display = 'none';
        if(data.success) {
            sentMsg.style.display = 'block';
            form.reset();
        } else {
            errorMsg.textContent = data.message;
            errorMsg.style.display = 'block';
        }
    })
    .catch(error => {
        loading.style.display = 'none';
        errorMsg.textContent = 'Error al enviar el mensaje. Por favor intente nuevamente.';
        errorMsg.style.display = 'block';
    })
    .finally(() => {
        submitBtn.disabled = false;
    });
});
