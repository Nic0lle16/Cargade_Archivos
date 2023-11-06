<!DOCTYPE html>
<html>
<head>
    <title>Upload and Download Files </title>
</head>
<body>
    <h1>Upload and Download Files</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Subir archivo" name="submit">
    </form>

    <h2>Archivos en la carpeta "uploads":</h2>
    <ul>
        <?php
        $files = glob('uploads/*');
        foreach ($files as $file) {
            echo "<li><a href='download.php?file=" . basename($file) . "'>" . basename($file) . "</a></li>";
        }
        ?>
    </ul>
</body>
</html>