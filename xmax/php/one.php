<!-- # PHP code for handling form submissions, user authentication, and e-commerce functionality

# Database connection
$db = new mysqli('localhost', 'username', 'password', 'database');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

# User Registration
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

# User Login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        echo "Login successful";
    } else {
        echo "Invalid username or password";
    }
}

# E-commerce functionality
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['purchase'])) {
    $product_id = $_POST['product_id'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO orders (user_id, product_id) VALUES ('$user_id', '$product_id')";

    if ($db->query($sql) === TRUE) {
        echo "Order placed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

$db->close(); -->


<?php
// Database connection
$db = new mysqli('localhost', 'username', 'password', 'database');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// User Registration
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

// User Login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        echo "Login successful";
    } else {
        echo "Invalid username or password";
    }
}

// E-commerce functionality
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['purchase'])) {
    $product_id = $_POST['product_id'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO orders (user_id, product_id) VALUES ('$user_id', '$product_id')";

    if ($db->query($sql) === TRUE) {
        echo "Order placed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

$db->close();
?>

