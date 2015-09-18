<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<p>GET:</p>
<form action="" method="GET" name="getInfo">
    <input type="text" name="name" placeholder="name"/>
    <input type="number" name="age" placeholder="age"/>
    <input type="submit" value="Get"/>
</form>

<?php
//var_dump($_GET);
//var_dump($_SERVER['QUERY_STRING']);

if(isset($_GET['name']) && isset($_GET['age'])){
    $name = $_GET['name'];
    $age = $_GET['age'];

    $escapedName = htmlentities($name);
    echo "Hi, ".$escapedName."! Your age is ".$age.".";
}
?>

</body>
</html>