<?php
session_start();
?>

<html>
<head>
    <meta charset="UTF-8"/>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <header>
    <h1>Guess Number Game</h1>
    </header>
    <div>
        <form action="play.php" method="post">
            <label>Enter your name:</label>
            <input type="text" name="name" placeholder="name"/>
            <input type="submit" value="Start Game" name="play"/>
        </form>
    </div>
    <?php
    if(!isset($_SESSION["countVisits"])) {
        $_SESSION["countVisits"] = 1;
        echo "Session countVisits is set.";
    }else{
        ++$_SESSION["countVisits"];
    }

    if(!isset($_SESSION["countWins"])) {
        $_SESSION["countWins"] = 0;
        echo "Session countWins is set.";
    }
    ?>
</body>
</html>


