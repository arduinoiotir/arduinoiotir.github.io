<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

<!-- آیکون تب مرورگر -->
    <link rel="icon" type="image/png" href="images/Icon.png">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/Background.jpg'); /* تصویر پس‌زمینه */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #login-container {
            background-color: rgba(255, 255, 255, 0.7); /* پس‌زمینه فرم با شفافیت */
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
        }

        #login-container img {
            width: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            text-align: left;
        }

        input {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div id="login-container">
        <img src="images/logo.png" alt="Logo"> <!-- آیکون بالا -->
        <h2>Login</h2>
        <form action="dashboard.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
