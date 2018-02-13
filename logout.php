<?php
session_start();
session_destroy();
echo 'You have been logged out. <a href="login.php">Go back</a>';
header( "refresh:0.6;url=login.php" );
