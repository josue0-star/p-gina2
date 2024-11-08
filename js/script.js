// script.js - Para funciones de JavaScript si necesitas agregar interactividad
document.getElementById('reservationForm').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Reserva completada con éxito.');
    this.reset();
});
