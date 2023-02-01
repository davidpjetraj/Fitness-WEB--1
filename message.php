<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
require('db.php');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Client area</title>
    <link rel="stylesheet" href="messageStyle.css" />
    <!-- <link rel="stylesheet" href="style.css" /> -->
</head>
<body>
<div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are in user area.</p>      
        <p><a href="index.html">Home</a> 
        <a href="dashboard.php">Dashboard</a> 
        <a href="logout.php">Logout</a></p>

            <h1>Send a message!</h1>
                <ul>
                    <li>
                        <input type="text" class="comment-input" name="username" placeholder="Username" required />
                        <div class="error"></div>

                    <li>
                        <input type="text" class="comment-input" name="email" placeholder="Email">
                        <div class="error"></div>
                    </li>
                    <li>
                        <input type="textarea" class="comment-input" name="comment" placeholder="Leave a Comment...">
                        <div class="error"></div>
                    </li>
                </ul>
            <input type="submit" value="Send!"  class="btn"/>
</div>
</body>
</html>
