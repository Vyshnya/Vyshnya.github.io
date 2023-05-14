/*
"use strict"

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contact-form');
    form.addEventListener('submit', formSend);

    async function formSend(e) {
        e.preventDefault();
        
        let formData = new FormData(form);
        let response = await fetch('assets/php/sendmail.php', {
            method: 'POST',
            body: formData
        });
        if (response.ok) {
            let result = await response.json();
            alert(result.message);
            formPreview.innerHTML = '';
            form.reset();
        } else {
            alert("Помилка! Спробуйте ще раз");
        }
        
    }


});

*/