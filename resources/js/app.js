setTimeout(function() {
    let alerts = document.querySelectorAll('.auto-hide');
    alerts.forEach(function(alert) {
        alert.style.transition = 'opacity 0.5s ease';
        alert.style.opacity = '0';
        setTimeout(() => alert.remove(), 500); // Elimina del DOM
    });
}, 3000);