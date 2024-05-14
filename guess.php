<!DOCTYPE html>
<html>
<head>
    <title>f2f863 - Saud Tahir - Guessing Game</title>
</head>
<body>
    <h1>Welcome to Saud Tahir</h1>

    <?php
    $correct_number = 13;
    $message = '';

    // Check if the guess parameter is set
    if (isset($_GET['guess'])) {
        $guess = $_GET['guess'];

        // Validate the guess parameter
        if (strlen($guess) < 1) {
            $message = "Missing guess parameter";
        } elseif (strlen($guess) < 3) { // Assuming 'too short' means less than 3 characters
            $message = "Your guess is too short";
        } elseif (!is_numeric($guess)) {
            $message = "Your guess is not a number";
        } else {
            $guess = (int) $guess;
            if ($guess < $correct_number) {
                $message = "Your guess is too low";
            } elseif ($guess > $correct_number) {
                $message = "Your guess is too high";
            } else {
                $message = "Congratulations - You are right";
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
