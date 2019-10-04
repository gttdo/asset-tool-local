<?php
  if(isset($_POST['logout_button'])) {
    session_destroy();
    echo "Your has been destroyed! You've been logged out!";
    header("Location: index.php");
  }
  ?>
