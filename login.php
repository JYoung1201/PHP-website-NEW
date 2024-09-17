//This is the page to login from. If you are already logged in, it will redirect you to the organizational chart page
<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: variablesnew.php'); // Redirect if already logged in
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="authenticate.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>