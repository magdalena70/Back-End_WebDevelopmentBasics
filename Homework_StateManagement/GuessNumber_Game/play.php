<?php
session_start();
?>

<html>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
<body>
    <header>
        <h1>Guess Number Game</h1>
    </header>
    <div id="guessNumber">
        <span>Find the secret number in range [1..100]:</span>
        <form action="" method="post">
            <input type="number" name="inputNum" placeholder="enter a number"/>
            <input type="submit" value="Guess secret number" name="guess"/>
        </form>
    </div>

<?php
if(isset($_POST['name'])) {
    $userName = htmlentities($_POST['name']);
    $trimmedUserName = trim($userName);
    if (empty($trimmedUserName)) {
        header("Location: index.php");
        exit;
    }

    setcookie('userName', $trimmedUserName);
    $_COOKIE['userName'] = $trimmedUserName;

    $secretNum = rand(1, 100);
    setcookie('secretNum', $secretNum);
    $_COOKIE['secretNum'] = $secretNum;
    ?>

    <em>Hello,  <?= $_COOKIE['userName'];?>, give a hint => <?= $_COOKIE['secretNum'];?></em>

    <?php
}

if(!isset($_POST['name']) && !isset($_POST['inputNum'])){
    header("Location: index.php");
    exit;
}

if (isset($_POST['inputNum'])) {
    $inputNum = (int)$_POST['inputNum'];
    if ($inputNum < 1 || $inputNum > 100) {
        ?>

        <h2 id="error">Invalid number, enter a new guess again.</h2>

    <?php
    } else {
        if ($inputNum == $_COOKIE['secretNum']) {
            echo "Number of visits is " . $_SESSION["countVisits"] . ".<br>";
            $_SESSION["countWins"]++;
            echo "Number of wins is " . $_SESSION["countWins"];
            ?>

            <script>
                var content =  document.getElementById("guessNumber");
                content.parentNode.removeChild(content);
            </script>

            <h1>Congratulations, <?= $_COOKIE['userName']; ?>!</h1>
            <p>The secret number is <b><?= $_COOKIE['secretNum'] ?>.</b></p>
            <form method="post" action="index.php">
                <label>You can use the button:</label>
                <input type="submit" value="Play Again" name="redirect_to_the_start_page"/>
            </form>

        <?php
            //session_destroy();
        }

        if ($inputNum < $_COOKIE['secretNum']) {
            ?>

            <h2>Up!</h2>
            <p>You can enter a new guess again.</p>

        <?php
        }

        if ($inputNum > $_COOKIE['secretNum']) {
            ?>

            <h2>Down!</h2>
            <p>You can enter a new guess again.</p>

        <?php
        }
    }
}
?>
</body>
</html>
