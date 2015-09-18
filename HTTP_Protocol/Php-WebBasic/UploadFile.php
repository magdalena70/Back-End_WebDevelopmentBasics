<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="getFile"/>
    <input type="submit" name="getFile"/>
</form>
<?php
//var_dump($_FILES);

foreach ($_FILES as $fileKey) {
    if($fileKey['error'] === 0){
        if($fileKey['type'] == 'image/jpeg'){
            if(move_uploaded_file($fileKey['tmp_name'], 'Files/' . $fileKey['name'])){
                echo 'File with name: "' . $fileKey['name'].'" was uploaded. <br/>';
            }
        }
    }
}
?>

</body>
</html>

