<?php
require 'config.php';
 if(isset($_POST["submit"])){
 

$name=$_POST["name"];
// echo $name;
$idno=$_POST["idno"];
$dob=$_POST["dob"];
$gen=$_POST["gen"];
$adrs=$_POST["adrs"];
$ph=$_POST["ph"];
$bld=$_POST["bld"];
$dept=$_POST["dept"];
$file = $_FILES["file"]["name"];
$tempname = $_FILES["file"]["tmp_name"];
$folder = "./picture/" . $file;

list($width, $height) = getimagesize( $tempname );
$source =imagecreatefromstring( file_get_contents( $tempname ) );
    $dest = imagecreatetruecolor( 100, 100 );
    imagecopyresampled( $dest, $source, 0, 0, 0, 0, 100, 100, $width, $height );
    imagedestroy( $source );
    imagepng( $dest, $tempname );
    imagedestroy( $dest );

$checke="SELECT * FROM info WHERE idno =$idno";
$rse = mysqli_query($con,$checke);
$datae = mysqli_num_rows($rse);
if($datae >= 1) 
{
    echo "<h3> Roll No Already in Exists </h3>";
}
else
    {
    $query="INSERT INTO info(name,idno,dob,gen,adrs,ph,bld,dept,file)VALUES('$name','$idno','$dob','$gen','$adrs','$ph','$bld','$dept','$file')";
    
    if (move_uploaded_file($tempname,$folder)){
        // echo "<h3>  Image uploaded successfully!</h3>";
    }
    else{
        echo "<h3>  Failed to upload image!</h3>";
    }
    $run=mysqli_query($con,$query);
    if($run){
        // echo "<h3>data inserterd</h3>";
    }
    else{
        echo "<h3>data not inserterd</h3>";
    }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>     
</head>
<body>
    <div style="text-align: center;">
        <button class="btn btn-primary"onclick="window.print()">Download Pdf</button>
    </div><br>
<div class="container text-center" style="height: 460px;px ;width: 320px;border-radius: 7px;
    border: 1px dashed blue;background-image: url('back.jpg');-webkit-print-color-adjust: exact;">
    <?php
 $qs = "SELECT * FROM info WHERE idno = '$idno'"; 
 $result = mysqli_query($con, $qs);
 $data = mysqli_fetch_assoc($result);
 ?>
 <h3 style="color:navy;text-align: center;-webkit-print-color-adjust: exact;" >
<img src="logo.jpg" style="-webkit-print-color-adjust: exact;"> ABCD Engineering College</h3>
     <img src="./picture/<?php echo $data['file']; ?>" 
     style="box-shadow: 2px 5px 9px #888888;border-radius: 10px;" ><p></p>
     <h4><?php echo $data['name']; ?></h4>
     <h6><b>Roll No : </b><?php echo $data['idno']; ?></h6>

     <!-- <span><b>Date Of Birth :</b><?php //echo $data['dob']; ?></span>
     <span><b>Gender :</b><?php //echo $data['gen']; ?></span><br> -->

     <p><b>Address : </b><?php echo $data['adrs']; ?></p>
     <p><b>Phone No : </b><?php echo $data['ph']; ?></p>
     <p><b>Blood Group : </b><?php echo $data['bld']; ?></p>
     <p><b>Department : </b><?php echo $data['dept']; ?></p>
     <h6 style="color:navy ; -webkit-print-color-adjust: exact;text-align: center; ">
            dummy Adress1,
            dummy State,
            Ph.No:1234567890
            Mail-abc@domain.in</h6>
    </div>
</body>
</html>