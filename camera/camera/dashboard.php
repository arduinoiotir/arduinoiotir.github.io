<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
        }

        #container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        img {
            max-width: 100%;
            height: auto;
        }

        video {
            width: 100%;
            height: auto;
        }

        a {
            display: block;
            margin-top: 10px;
            text-align: center;
            text-decoration: none;
            color: #4caf50;
            font-weight: bold;
        }

        a:hover {
            color: #45a049;
        }
    </style>
</head>
<body>
    <div id="container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>

        <h1>Camera Arduino Online Viewer</h1>
  
        <!-- Display the latest photo -->
        <h2>Latest Photo</h2>
        <img id="photo" src="images/photo.jpg" alt="Latest Photo" style="max-width: 100%;">

        <!-- Display the latest video frame -->
        <h2>Latest Video Frame</h2>
        <video id="video" controls width="640" height="480">
            Your browser does not support the video tag.
        </video>

        <a href="logout.php">Logout</a>
    </div>

    <script>
        // Function to update the latest photo
        function updatePhoto() {
            const photo = document.getElementById('photo');
            const timestamp = new Date().getTime();
            photo.src = `images/photo.jpg?timestamp=${timestamp}`;
        }

        // Function to update the latest video frame
        function updateVideo() {
            const video = document.getElementById('video');
            const timestamp = new Date().getTime();
            video.src = `images/video_frame.jpg?timestamp=${timestamp}`;
        }

        // Update photo and video every 5 seconds
        setInterval(() => {
            updatePhoto();
            updateVideo();
        }, 5000);
    </script>
</body>
</html>
