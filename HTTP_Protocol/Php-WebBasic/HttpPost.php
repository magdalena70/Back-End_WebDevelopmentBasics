<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<p>POST:</p>
<form action="HttpPost.php" method="POST" name="postInfo">
    <input type="text" name="userName" placeholder="userName"/>
    <input type="password" name="pass" placeholder="password"/>
    <input type="submit" value="Post"/>
</form>

<?php
//var_dump($_POST);
//var_dump($_REQUEST);
//var_dump($_SERVER);

if(isset($_POST['userName']) && isset($_POST['pass'])){
    $userName = $_POST['userName'];

    $escapedUserName = htmlentities($userName);
    $escapedPass = htmlentities($_POST['pass']);
    echo "Hi, $escapedUserName. Your password is $escapedPass";
}
?>
</body>
</html>