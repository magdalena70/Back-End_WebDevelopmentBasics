<?php require_once 'functions.php' ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
<header>
    <h1>Query Extensions</h1>
</header>
<h2>1.Try with the name in quotes : (someName' OR 1=1 ORDER BY id DESC; -- ), and see result.</h2>
<h2>2.Try with some html or script tags, and see result.</h2>
<p>Try without PDO:</p>
<form method="post" action="index.php" name="withoutPdo">
   <input type="text" name="userWithoutPdo" placeholder="enter name">
    <input type="submit" name="Get info without PDO" value="Try">
</form>

<?php
// Without PDO
if(isset($_POST['userWithoutPdo'])){
    $user = $_POST['userWithoutPdo'];
    mysql_connect("localhost","root","","test_database");
    mysql_select_db("test_database");
    $query = "SELECT * FROM Members WHERE username = '$user'";
    $result = mysql_query($query);
    var_dump($query);
    // if query is: "someName' OR 1=1 ORDER BY id DESC; -- ", there is a security problem (get last member)
    $userFetched = mysql_fetch_assoc($result);
    //var_dump($userFetched);
    if(!empty($userFetched)){
        echo "User with username " . getHtmlentities($userFetched['username']) . " has:<br />";
        echo "Id:". $userFetched['id'] .
            "<br /> Email: " . getHtmlentities($userFetched['email']) .
            "<br />Bio: " . getHtmlentities($userFetched['bio_member']);
    }else{
        echo "Invalid credentials.";
    }
    var_dump($_COOKIE);
}
?>

<p>Try with PDO:</p>
<form method="post" action="index.php" name="withPdo">
    <input type="text" name="userWithPdo" placeholder="enter name">
    <input type="submit" name="Get info with PDO" value="Try">
</form>

<?php
// With PDO
if(isset($_POST['userWithPdo'])) {
    $userPdo = $_POST['userWithPdo'];
    $pdo = new PDO('mysql:host=localhost;dbname=test_database', 'root', '');
    $queryPdo = "SELECT * FROM Members WHERE username = ?";
    var_dump($queryPdo);
    // if query is: "someName' OR 1=1 ORDER BY id DESC; -- ", there is no security problem
    $resultPdo = $pdo->prepare("$queryPdo");
    $resultPdo->bindParam(1, $userPdo, PDO::PARAM_STR);
    $resultPdo->execute();
    $userFetchedPdo = $resultPdo->fetch(PDO::FETCH_ASSOC);
    //var_dump($userFetchedPdo);
    if(!empty($userFetchedPdo)){
        echo "User with username " . getHtmlentities($userFetchedPdo['username']) . " has:<br />";
        echo "Id:". $userFetchedPdo['id'] .
            "<br /> Email: " . getHtmlentities($userFetchedPdo['email']) .
            "<br />Bio: " . getHtmlentities($userFetchedPdo['bio_member']);
    }else{
        echo "Invalid credentials.";
    }
    var_dump($_COOKIE);
}
?>
</body>
</html>