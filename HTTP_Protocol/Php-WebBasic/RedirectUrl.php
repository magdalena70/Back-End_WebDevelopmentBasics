<form method="post">
    <input type="text" name="userName"/>
    <input type="submit" name="getUserName"/>
</form>
<?php

if(isset($_POST['userName'])){
    if(file_put_contents("users.txt", $_POST['userName'])){
        header("Location: RedirectUrl.php?success=1");
    }
}

if(isset($_GET['success'])){
    echo " Registered successfully";
}