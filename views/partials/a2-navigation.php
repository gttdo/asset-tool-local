<?php
if(isset($_SESSION['userLoggedIn'])) {
  $userLoggedIn = $_SESSION['userLoggedIn'];
  // echo $userLoggedIn;
}
else {
  header("Location: index.php");
}
 ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
<div class="container-fluid">
<span class="navbar-brand" role="link" tabindex="0" onclick="openPage('index.php')">
  <img class="navbar_logo" src="../../../public/images/wcd_favicon.png" alt="">
</span>
<div class="collapse navbar-collapse">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item welcomeText font_15">Welcome <?php echo $userLoggedIn ?></li>
    <li class="nav-item logoutText font_15">
      <button id="logoutBtn" class="nav_button" onclick="logout()" type="button" name="button">Logout</button>
    </li>
  </ul>
</div>
</div>
</nav>

<script>
function logout(){
  console.log('logout button clicked');
  alert("You have logged out!");
  window.location.href = "/wcd-asset-tool";
}
</script>