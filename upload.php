<?php
if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
    $fileName = $_FILES['userfile']['name'];
    $tmpName  = $_FILES['userfile']['tmp_name'];
    $fileSize = $_FILES['userfile']['size'];
    $fileType = $_FILES['userfile']['type'];

    $content = file_get_contents($tmpName);
    $content = addslashes($content);

    include 'library/config.php';
    include 'library/opendb.php';

    // Prepare the query using PDO
    $query = "INSERT INTO upload (name, size, type, content) VALUES (:name, :size, :type, :content)";
    $stmt = $pdo->prepare($query);

    // Bind the parameters
    $stmt->bindParam(':name', $fileName);
    $stmt->bindParam(':size', $fileSize);
    $stmt->bindParam(':type', $fileType);
    $stmt->bindParam(':content', $content, PDO::PARAM_LOB);

    // Execute the query
    if ($stmt->execute()) {
        echo "<br>File $fileName uploaded<br>";
    } else {
        die('Error, query failed');
    }

    include 'library/closedb.php';
}
?>