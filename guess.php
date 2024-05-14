<!DOCTYPE html>
<html>
<head>
    <title>0839d06f - Guessing Game by Saud</title>
</head>
<body>
    <h1>Welcome to the Guessing Game</h1>

    <?php
    $correct_number = 13;
    $guess = isset($_GET['guess']) ? $_GET['guess'] : null;
    $message = '';

    if (isset($guess)) {
        if (!is_numeric($guess)) {
            $message = "Your guess is not a number.";
        } else {
            if ($guess < $correct_number) {
                $message = "Your guess is too low.";
            } elseif ($guess > $correct_number) {
                $message = "Your guess is too high.";
            } else {
                $message = "Congratulations - You are right!";
            }
        }
    }
    ?>

    <form method="get">
        <p><label for="guess">Enter your guess:</label>
        <input type="text" name="guess" id="guess" size="40"></p>
        <input type="submit">
    </form>

    <p><?php echo htmlentities($message); ?></p>
</body>
</html>
