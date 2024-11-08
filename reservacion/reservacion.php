<?php
include '../base/conexion.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$reservation_date = $_POST['reservation_date'];
$reservation_time = $_POST['reservation_time'];

$sql = "INSERT INTO reservacion (name, email, phone, reservation_date, reservation_time) VALUES ('$name', '$email', '$phone', '$reservation_date', '$reservation_time')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Reservación realizada con éxito.'); window.location.href='../index.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
