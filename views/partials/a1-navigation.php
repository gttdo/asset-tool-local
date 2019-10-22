<?php
if(isset($_SESSION['userLoggedIn'])) { $userLoggedIn = $_SESSION['userLoggedIn'];}
else {header("Location: wcd-asset-tool.php/index.php");}

$usersQuery = "SELECT * FROM users WHERE email = '$userLoggedIn'";
$usersQueryResult = mysqli_query($con, $usersQuery);
$users = mysqli_fetch_array($usersQueryResult);
$userName = $users['name'];
$userImage = $users['image'];
?>

<style>
.image_icon {
  height: 30px;
  width: 30px;
  border-radius: 50%;
  background-color: #ccc;
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
<div class="container-fluid">
<span style="color: white;" class="mr-3 font_20">BETA</span>
<span class="navbar-brand" role="link" tabindex="0">
  <a href="/wcd-asset-tool/views/admin/admin-view-devices.php">
    <img class="navbar_logo" src="../../public/images/wcd_favicon.png" alt="">
  </a>

</span>
<div class="collapse navbar-collapse">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item welcomeText font_15">Welcome <?php echo $userImage ?></li>
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
  window.location.href = "/wcd-asset-tool/index.php";
}
</script>
