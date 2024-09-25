<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
<style>
/* General styles */
body {
    font-family: Arial, sans-serif;
    background-image: url('bgLog.jpg');
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Login form container */
.login-container {
    background-color: transparant;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px red;
    width: 100%;
    max-width: 400px;
}

/* Form title */
.login-form h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

/* Input group styles */
.input-group {
    margin-bottom: 15px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
}

/* Button styles */
.btn {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
}

</style>
</head>
<body>

    <div class="login-container">
        <form action="inventory.php" method="post" class="login-form">
            <h2>Login</h2>
            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <button type="submit" class="btn">LogIn</button>
            </div>
        </form>
    </div>

</body>
</html>
