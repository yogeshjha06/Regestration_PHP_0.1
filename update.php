<?php
include ('conn.php');
error_reporting(0);
$sql = "SELECT * FROM `signup` WHERE `name`='$_SESSION[name]'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$uid = $row[0];
$name_orignal = $row[1];
$email_orignal = $row[2];

//basic info

$sql2 = "SELECT * FROM `basic_info` WHERE `uid`='$uid'";
$result2 = mysqli_query($con,$sql2);
$row = mysqli_fetch_array($result2);

$name = $row[1];
$father_name = $row[2];
$mother_name = $row[3];
$dob = $row[4];
$edu = $row[5];
$roll = $row[6];

///contact info

$sql3 = "SELECT * FROM `contact_info` WHERE `uid`='$uid'";
$result3 = mysqli_query($con,$sql3);
$row = mysqli_fetch_array($result3);

$street = $row[1];
$addinfo = $row[2];
$zip = $row[3];
$place = $row[4];
$country = $row[5];
$code = $row[6];
$phone = $row[7];
$email = $row[8];


if(!isset($_SESSION['is_login']))
{
    header('location:login.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>
    Inforam | Amendment
  </title>
<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'>
    </script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>  

<nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Inforam</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-secondary" aria-current="page" href="reg.php">Regestration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="update.php">Amendment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-secondary" href="backend.php?logout=1">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<link rel="stylesheet" href="CSS/ss.css" type="text/css">

<section class="h-100 h-custom gradient-custom-2" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>

  
<form action="" method="post">
  <!-- basic info -->
                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input name="name" type="text" id="form3Examplev4" class="form-control form-control-lg" value="<?php echo$name;?>" />
                      <label class="form-label" for="form3Examplev4">Student's Name</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input name="father" type="text" id="form3Examplev4" class="form-control form-control-lg" value="<?php echo$father_name;?>"/>
                      <label class="form-label" for="form3Examplev4">Father's Name</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input name="mother" type="text" id="form3Examplev4" class="form-control form-control-lg" value="<?php echo$mother_name;?>"/>
                      <label class="form-label" for="form3Examplev4">Mother's Name</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input name="dob" type="date" id="form3Examplev4" class="form-control form-control-lg" value="<?php echo$dob;?>"/>
                      <label class="form-label" for="form3Examplev4">Date of Birth</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input name="edu" type="text" id="form3Examplev4" class="form-control form-control-lg" value="<?php echo$edu;?>"/>
                      <label class="form-label" for="form3Examplev4">Education</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input name="roll" type="text" id="form3Examplev4" class="form-control form-control-lg" value="<?php echo$roll;?>"/>
                      <label class="form-label" for="form3Examplev4">Roll Number</label>
                    </div>
                  </div>


                </div>
              </div>

              <!-- contact form  -->


              <div class="col-lg-6 bg-dark text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Contact Details</h3>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input name="street" type="text" id="form3Examplea2" class="form-control form-control-lg" value="<?php echo$street;?>"/>
                      <label class="form-label" for="form3Examplea2">Street Name</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input name="addinfo" type="text" id="form3Examplea3" class="form-control form-control-lg" value="<?php echo$addinfo;?>"/>
                      <label class="form-label" for="form3Examplea3">Additional Information</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input name="zip" type="text" id="form3Examplea4" class="form-control form-control-lg" value="<?php echo$zip;?>"/>
                        <label class="form-label" for="form3Examplea4">Zip Code</label>
                      </div>

                    </div>
                    <div class="col-md-7 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input name="place" type="text" id="form3Examplea5" class="form-control form-control-lg" value="<?php echo$place;?>"/>
                        <label class="form-label" for="form3Examplea5">Place</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input name="contry" type="text" id="form3Examplea6" class="form-control form-control-lg" value="<?php echo$country;?>"/>
                      <label class="form-label" for="form3Examplea6">Country</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input name="code" type="text" id="form3Examplea7" class="form-control form-control-lg" value="<?php echo$code;?>"/>
                        <label class="form-label" for="form3Examplea7">Code</label>
                      </div>

                    </div>
                    <div class="col-md-7 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input name="phone" type="text" id="form3Examplea8" class="form-control form-control-lg" value="<?php echo$phone;?>"/>
                        <label class="form-label" for="form3Examplea8">Phone Number</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="form-outline form-white">
                      <input name="email" type="text" id="form3Examplea9" class="form-control form-control-lg" value="<?php echo$email;?>"/>
                      <label class="form-label" for="form3Examplea9">Your Email</label>
                    </div>
                  </div>

                  <button name="update" type="submit" class="btn btn-light btn-lg"
                    data-mdb-ripple-color="dark">Update</button>

                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</section>


<footer class="bg-dark text-center text-white">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright: 
    <a class="text-white" href="https://yogeshjha.com/">yogeshjha.com</a>
  </div>
  <!-- Copyright -->
</footer>

</body>
</html>

<?php
if (isset($_POST['update']))
{
///basic
$name1=$_POST["name"];
$father1=$_POST["father"];
$mother1=$_POST["mother"];
$dob1=$_POST["dob"];
$edu1=$_POST["edu"];
$roll1=$_POST["roll"];
///contact
$street1=$_POST["street"];
$addinfo1=$_POST["addinfo"];
$zip1=$_POST["zip"];
$place1=$_POST["place"];
$contry1=$_POST["contry"];
$code1=$_POST["code"];
$phone1=$_POST["phone"];
$email1=$_POST["email"];

///update basic
            $sql="UPDATE `basic_info` SET `name`='$name1',`father_name`='$father1',
            `mother_name`='$mother1',`dob`='$dob1',`edu`='$edu1',
            `roll`='$roll1' WHERE `uid`='$uid'";
            $result=mysqli_query($con,$sql);            
///update contact
            $sql1="UPDATE `contact_info` SET `street`='$street1',`addinfo`='$addinfo1',
            `zip`='$zip1',`place`='$place1',`country`='$contry1',
            `code`='$code1',`phone`='$phone1',`email`='$email1' WHERE `uid`='$uid'";
            $result=mysqli_query($con,$sql1);

            if($result)
            {
                echo"<script>
                    
                    swal({
                    title: 'Thank you!',
                    text: 'Your details has been successfully updated in our database',
                    type: 'SUCCESS'
                    }).then(function() 
                    {
                        window.location = 'update.php';
                    });
                    
                    </script>";
            }
}
?>