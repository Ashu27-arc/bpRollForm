<?php
session_start();
if (isset($_POST['vercode'])) {
  if ((empty($_SESSION["vercode"])) || ($_SESSION["vercode"] != $_POST['vercode'])) {
    die("<script>alert('Invalid Verification Code'); history.back();</script>");
  }
}
require 'config.php';
$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$subjectV = $_POST['subjectV'];

$sql = "INSERT INTO req_query_table(full_name,phone_number,email,message, subject)VALUES ('$full_name','$phone_number','$email','$message','$subject')";


if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully"
  echo "You Message Sent. Thank you " . $full_name . ", we will contact you shortly.";
  // You can also use header('Location: thank_you.php'); to redirect to another page.
  // You cannot use header and echo together. It's one or the other.
  //https://ai.botcontrolpanel.com/api/send?number=917678665537&type=text&message=Thanks+for+your+Veloxn+Private+Limited&instance_id=6538CAD5B0271&access_token=64951e687bcbb

  // header('Location: https://ai.botcontrolpanel.com/api/send?number=91' . $phone_number . '&type=text&message=Thanks+for+your+Veloxn+Private+Limited2&instance_id=6538CAD5B0271&access_token=64951e687bcbb');
  if ($subjectV == 'EducationManagementSystem') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+School+Management+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'SocialNetworkingSoftware') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Social+Networking+Software.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'HospitalManagementSystem') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Hospital+Management+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'ProjectManagementSystem') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Project+Management+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'RestaurantPOSSoftware') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Restaurant+POS+Software.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'ElectionCampaign') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Election+Campaign.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'HotelManagementSystem') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Hotel+Management+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'OnlineLearningandExaminationSystem') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+online+Learning+and+Examination+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'RealEstateSolutions') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Real+Estate+Solutions.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'GSTBillingSoftware') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+GST+Billing+Software.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'PayRollAndHRSystem') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+PayRoll+And+HR+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'EmployeeAttendanceManagementSystem') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Employee+Attendance+Management+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'InventorySoftware') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Inventory+Software.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'ShoppingWebsiteSoftwares') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Shopping+Website+Softwares.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'SoftwareDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Software+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'WebsitesDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Websites+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'MobileAPPsDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Mobile+APPs+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'e-CommerceDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+e-Commerce+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'DataServices') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Data+Services.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'e-PublishingSolutions') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+e-Publishing+Solutions.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'OnlineMarketing') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Online+Marketing.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'SEOServices') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+SEO+Services.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'ContentWritingServices') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Content+Writing+Services.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'SoftwareMaintenanceServices') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Software+Maintenance+Services.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'WebHostingServices') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Web+Hosting+Services.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'DomainRegistration') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Domain+Registration.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'PayPerClick') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Pay+Per+Click.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'AdvertisingSystem') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Advertising+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'SocialMediaOptimization') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Social+Media+Optimization.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'DigitalMarketing') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Digital+Marketing.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'BrandingandPromotion') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Branding+and+Promotion.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'OtherPromotionals') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Other+Promotionals.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'PropertyPortalDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Property+Portal+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'QRCodeSolution') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+QR+Code+Solution.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'Java/J2EEDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Java/J2EE+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'Microsoft.NETDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Microsoft.NET+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'PHPDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+PHP+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'RubyonRails(RoR)Development') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Ruby+on+Rails(RoR)+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'DataWarehouse') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Data+Warehouse.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'AndroidDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Android+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'iOSDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+iOS+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'WindowsDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Windows+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'PhoneGapDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Phone+Gap+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'CMSDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+CMS+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'HTML/CSS/JQuery/AJAX') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+HTML/CSS/JQuery/AJAX.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'RDBMSasBack-end') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+RDBMS+as+Back-end.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }else {
    $Message = "&type=text&message=Thanks+for+contacting+Bala+Roll+Form.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }
  //$Message =  "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+School+Management+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
/*
    if($subjectV=='EducationManagementSystem'){
$Message =  "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+School+Management+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";	
>>>>>>> 9b675c82e27892c994c8878d068ddf7422e391e6
            }else{
$Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
            }
*/


  $url = 'https://chatbot.veloxn.com/api/send?number=91' . $phone_number . $Message . '&instance_id=6607C1AF1A046&access_token=65bd128b57e2f';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
  if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
  }


  header('Location: contact-message-submitted.html#body');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>