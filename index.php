<?php
// Start the session
session_start();

// Set default timezone
date_default_timezone_set('UTC');

// Function to handle form submission
function handleFormSubmission() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['username'])) {
        $_SESSION['username'] = htmlspecialchars($_POST['username']);
    }
}

// Handle form submission
handleFormSubmission();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Webpage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        form {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"] {
            padding: 10px;
            width: 80%;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My PHP Webpage</h1>
    </header>

    <p>
        <?php
        // Display the current date and time
        echo "Today is " . date("l, F j, Y") . " and the current time is " . date("h:i:s A");
        ?>
    </p>

    <?php if (isset($_SESSION['username'])): ?>
        <h2>Hello, <?php echo $_SESSION['username']; ?>!</h2>
    <?php else: ?>
        <form method="POST" action="">
            <label for="username">Enter your name:</label><br>
            <input type="text" id="username" name="username" required><br>
            <input type="submit" value="Submit">
        </form>
    <?php endif; ?>
</body>
</html>
