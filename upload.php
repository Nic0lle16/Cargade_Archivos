<?php
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    echo "El archivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " se a subido con exito";
} else {
    echo "Hubo un error al subir el archivo.";
}
?>