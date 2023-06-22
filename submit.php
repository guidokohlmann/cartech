<!DOCTYPE html>
<html>
<head>
  <title>PDF Upload</title>
</head>
<body>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="pdfFile" accept=".pdf">
    <input type="submit" value="Upload">
  </form>
</body>
</html>
<?php
if (isset($_POST['submit'])){
  $file = $_FILES['myfile'];

  $fileName = $_FILES['myfile']['name'];
  $fileTmpName = $_FILES['myfile']['tmp_name'];
  $fileSize = $_FILES['myfile']['size'];
  $fileError = $_FILES['myfile']['error'];
  $fileType = $_FILES['myfile']['type'];

  $fileExt = explode('.', $fileName);
  $fileActuaLExt = strtolower(end($fileExt));
  
  $allowed = array('jpg', 'jpeg', 'png', 'pdf');

  if (in_array($fileActuaLExt, $allowed)){
    if ($fileError === 0) {
      if ($fileSize < 1000000){
          $fileNameNew = uniqid('', true).".".$fileActuaLExt;
          $fileDestination = 'submit/'.$fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestination);
          header("location: Checklist.php?uploadsuccess");
      } else{
        echo "Het bestand dat u heeft gekozen is te groot";
      }

    } else{
      echo "Er is iets mis gegaan bij het toevoegen van uw bestand";
    }

  } else{
    echo "U kunt dit bestand niet uploaden";
  }

}
?>
