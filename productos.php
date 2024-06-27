<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configurar la conexión a la base de datos (reemplaza con tus propios detalles)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uycali";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener datos del formulario
    $productName = mysqli_real_escape_string($conn, $_POST['productName']);
    $productPrice = $_POST['productPrice'];
    $productImage = $_FILES['productImage']['name']; // Nombre de la imagen
    $imageTmpName = $_FILES['productImage']['tmp_name']; // Nombre temporal de la imagen

    // Mover la imagen a una ubicación permanente en el servidor
    $targetDir = "uploads/"; // Directorio donde se guardarán las imágenes
    $targetFilePath = $targetDir . basename($productImage);

    if (move_uploaded_file($imageTmpName, $targetFilePath)) {
        // Insertar los datos en la base de datos
        $sql = "INSERT INTO productos (nombre, precio, imagen) VALUES ('$productName', '$productPrice', '$targetFilePath')";

        if ($conn->query($sql) === TRUE) {
            echo "Producto agregado correctamente.";
        } else {
            echo "Error al insertar el producto: " . $conn->error;
        }
    } else {
        echo "Error al subir la imagen.";
    }

    // Cerrar conexión
    $conn->close();
}
?>
