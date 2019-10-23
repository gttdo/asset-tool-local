<?php
if(isset($_SESSION['userLoggedIn'])) {
  $userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
  header("Location: index.php");
}

$usersQuery = "SELECT * FROM users WHERE email = '$userLoggedIn'";
$usersQueryResult = mysqli_query($con, $usersQuery);
$users = mysqli_fetch_array($usersQueryResult);
$userName = $users['name'];
$userImage = $users['image'];

 ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
<div class="container-fluid">
<span style="color: white;" class="mr-3 font_20">BETA</span>
<span class="navbar-brand" role="link" tabindex="0" onclick="openPage('index.php')">
  <img class="navbar_logo" src="../../../public/images/wcd_favicon.png" alt="">
</span>
<div class="collapse navbar-collapse">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item welcomeText font_15">Welcome <?php echo $userName ?>!
      <span class="ml-2">
        <img class="image_icon" src="<?php echo $userImage ?>" alt="user icon">
      </span></li>
    <li class="nav-item logoutText font_15">
      <a class="logoutText" href="/wcd-asset-tool">Logout</a>
    </li>
  </ul>
</div>
</div>
</nav>
