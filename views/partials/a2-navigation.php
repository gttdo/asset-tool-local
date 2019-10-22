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

 <style>
 .image_icon {
   height: 35px;
   width: 35px;
   border-radius: 50%;
   background-color: #333;
   border: 2px solid #eee;
   padding: .5rem;
 }
 </style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
<div class="container-fluid">
<span style="color: white;" class="mr-3 font_20">BETA</span>
<span class="navbar-brand" role="link" tabindex="0" onclick="openPage('index.php')">
  <img class="navbar_logo" src="../../../public/images/wcd_favicon.png" alt="">
</span>
<div class="collapse navbar-collapse">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item welcomeText font_15">Welcome <?php echo $userLoggedIn ?>!
      <span class="ml-2">
        <img class="image_icon" src="../../public/images/wcd_favicon.png" alt="user icon">
      </span>
    </li>
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
