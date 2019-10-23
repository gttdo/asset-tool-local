<?php
  // Sanitize device forms
  function sanitizeTags($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
  }

  if(isset($_POST['createDevice_button'])) {
    $deviceName = sanitizeTags($_POST['device_name']);
    $deviceImage = sanitizeTags($_POST['device_image']);
    $deviceSerial = sanitizeTags($_POST['deviceSerial']);
    $deviceAvail = sanitizeTags($_POST['device_availability']);
    $deviceNotes = sanitizeTags($_POST['device_notes']);
    $deviceCat = sanitizeTags($_POST['device_category']);

    $wasSuccessful = $device->createDevice($deviceName, $deviceImage, $deviceSerial, $deviceAvail, $deviceNotes, $deviceCat);


    if($wasSuccessful == true){
      header("Location: admin-view-devices.php");
      echo "submission successful";
    } else {
      echo "submission fail";
    }
  }

  if(isset($_POST['editDevice_button'])) {
    $deviceName = $_POST['device_name'];
    $deviceImage = $_POST['device_image'];
    $deviceSerial = $_POST['device_serial'];
    $deviceAvail = $_POST['device_availability'];
    $deviceNotes = $_POST['device_notes'];
    $deviceCat = $_POST['device_category'];
    $deviceID = $_GET['deviceID'];

    $editDeviceQuery = "UPDATE devices SET name='$deviceName', image='$deviceImage', serialNo='$deviceSerial', availability='$deviceAvail', notes='$deviceNotes', category='$deviceCat' WHERE id='$deviceID'";
    $editDeviceResult = mysqli_query($con, $editDeviceQuery);

    header("Location: /wcd-asset-tool/views/admin/admin-view-devices.php");

  }




 ?>
