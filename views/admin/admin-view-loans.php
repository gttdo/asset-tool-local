<?php
include("../../includes/config.php");
include("../../includes/classes/Device.php");
include("../partials/a-header.php");
include("../partials/a1-navigation.php");

$loansQuery = "SELECT * FROM loans";
$loansResult = mysqli_query($con, $loansQuery);

$usersQuery = "SELECT * FROM users";
$usersResult = mysqli_query($con, $usersQuery);
$userRow = mysqli_fetch_array($usersResult, MYSQLI_ASSOC);
$userID = $userRow['id'];








?>

<section class="adminDashboard">
  <div class="container-fluid">
    <ul class="nav nav-tabs mb-5">
      <li class="nav-item">
        <a class="nav-link" href="admin-view-devices.php">All Devices</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin-view-users.php">All Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="admin-view-loans.php">All Loans</a>
      </li>
    </ul>
  </div>

  <?php
    include("../partials/table-header-admin-loans.php");

    if($loansResult->num_rows > 0) {
      while($row = $loansResult->fetch_assoc()) {
        $loansID = $row['id'];
        $loansDevice = $row['deviceName'];
        $loaner = $row['userName'];
        $loanDate = $row['checkout'];
        $returnDate = $row['checkin'];
   ?>
   <tr class="text-center font_13">
     <td><?php echo $loansID ?></td>
     <td><?php echo $loaner ?></td>
     <td><?php echo $loansDevice ?></td>
     <td><?php echo $loanDate ?></td>
     <td><?php echo $returnDate ?></td>
     <td><a href="/" class="btn btn-outline-info">Contact Borrower</a></td>
   </tr>
   <?php
            }
          } else {
              echo "0 results";
      }
    ?>

   </tbody>
   </table>
   </div>
   </section>


  <?php include("../partials/footer.php"); ?>
