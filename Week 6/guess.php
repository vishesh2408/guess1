<!DOCTYPE html>
<html>
<head>
    <title>Guessing Game - ac70c80d</title>
</head>
<body>
    <h1>Welcome to the Guessing Game</h1>
    <?php
    if (!isset($_GET['guess'])) {
        echo "Missing guess parameter";
        return;
    }

    if (!is_numeric($_GET['guess'])) {
        echo "Your guess is not a number";
        return;
    }

    $correctAnswer = 20;
    $guess = $_GET['guess'];

    if ($guess < $correctAnswer) {
        echo "Your guess is too low";
    } elseif ($guess > $correctAnswer) {
        echo "Your guess is too high";
    } else {
        echo "Congratulations - You are right";
    }
    ?>
</body>
</html>
