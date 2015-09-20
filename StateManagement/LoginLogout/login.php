<?php require_once 'index.php'; ?>

<?php
if(isset($_SESSION['id'])){
    header("Location: profile.php");
    exit;
}
?>

<form action="" method="post">
    <input type="text" name="user"/>
    <input type="text" name="pass"/>
    <input type="submit" name="login" value="Login">
</form>

<?php
if(isset($_POST['login'])){
    $username = $_POST['user'];
    $password = md5($_POST['pass']);

    $loggedUser = array_filter($users, function($user) use($username, $password){
        return
            $user['username'] == $username &&
            $user['password'] == $password;
    });
    $loggedUserId = key($loggedUser);
    //var_dump($loggedUser);
    //var_dump($loggedUserId);

    if($loggedUserId){
        $_SESSION['id'] = $loggedUserId;
        header("Location: profile.php");
        exit;
    }
}