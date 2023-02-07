<?php
include ('conn.php');
$sql = "SELECT * FROM `signup` WHERE `name`='$_SESSION[name]'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$uid = $row[0];
$name_orignal = $row[1];
$email_orignal = $row[2];




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
    Inforam | Regestration
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
          <a class="nav-link active" aria-current="page" href="reg.php">Regestration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-secondary" aria-current="page" href="update.php">Amendment</a>
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
                      <input name="name" type="text" id="form3Examplev4" class="form-control form-control-lg" value="<?php echo$name_orignal;?>" />
                      <label class="form-label" for="form3Examplev4">Student's Name</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input name="father" type="text" id="form3Examplev4" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplev4">Father's Name</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input name="mother" type="text" id="form3Examplev4" class="form-control form-control-lg"/>
                      <label class="form-label" for="form3Examplev4">Mother's Name</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input name="dob" type="date" id="form3Examplev4" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplev4">Date of Birth</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input name="edu" type="text" id="form3Examplev4" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplev4">Education</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input name="roll" type="text" id="form3Examplev4" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplev4">Roll Number</label>
                    </div>
                  </div>


                </div>
              </div>

              <!-- contact form  -->


              <div class="col-lg-6 bg-primary text-white">
                <div class="p-5">
                  <h3 class="fw-normal mb-5">Contact Details</h3>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input name="street" type="text" id="form3Examplea2" class="form-control form-control-lg"  />
                      <label class="form-label" for="form3Examplea2">Street Name</label>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input name="addinfo" type="text" id="form3Examplea3" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Examplea3">Additional Information</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input name="zip" type="text" id="form3Examplea4" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea4">Zip Code</label>
                      </div>

                    </div>
                    <div class="col-md-7 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input name="place" type="text" id="form3Examplea5" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea5">Place</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline form-white">
                      <input name="contry" type="text" id="form3Examplea6" class="form-control form-control-lg"  />
                      <label class="form-label" for="form3Examplea6">Country</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input name="code" type="text" id="form3Examplea7" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea7">Code</label>
                      </div>

                    </div>
                    <div class="col-md-7 mb-4 pb-2">

                      <div class="form-outline form-white">
                        <input name="phone" type="text" id="form3Examplea8" class="form-control form-control-lg"  />
                        <label class="form-label" for="form3Examplea8">Phone Number</label>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="form-outline form-white">
                      <input name="email" type="text" id="form3Examplea9" class="form-control form-control-lg" value="<?php echo$email_orignal;?>"/>
                      <label class="form-label" for="form3Examplea9">Your Email</label>
                    </div>
                  </div>

                  <button name="Register" type="submit" class="btn btn-light btn-lg"
                    data-mdb-ripple-color="dark">Register</button>

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
//regestration form data
if(isset($_POST['Register']))
{

    $uname=$_SESSION['name'];

    $sql11 = "SELECT * FROM `signup` WHERE `name`='$uname'";
    $result11 = mysqli_query($con,$sql11);
    $row = mysqli_fetch_array($result11);

    $uid = $row[0];

    //basic details
    $name=$_POST['name'];
    $father_name=$_POST['father'];
    $mother_name=$_POST['mother'];
    $date_of_birth=$_POST['dob'];
    $education=$_POST['edu'];
    $roll=$_POST['roll'];

    //contact details
    $street=$_POST['street'];
    $addinfo=$_POST['addinfo'];
    $zip=$_POST['zip'];
    $place=$_POST['place'];
    $contry=$_POST['contry'];
    $code=$_POST['code'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    ///

    $res=mysqli_query($con,"SELECT * FROM `basic_info` WHERE uid='$uid'");

        if (mysqli_num_rows ($res) >0) 
        {
            echo "<script>
                
            swal({
            title: 'Oops!',
            text: 'You have alredy regestered!',
            type: 'ERROR'
            }).then(function() {
                window.location = 'reg.php';
            });
            
            </script>";
        }

        else
        {
            $sql="INSERT INTO `basic_info`(`name`, `father_name`, `mother_name`, `dob`, `edu`, `roll`, `uid`) 
            VALUES ('$name','$father_name','$mother_name','$date_of_birth','$education','$roll','$uid')";
            $result=mysqli_query($con,$sql);

            $sql1="INSERT INTO `contact_info`(`street`, `addinfo`, `zip`, `place`, `country`, `code`, `phone`, `email`, `uid`) 
            VALUES ('$street','$addinfo','$zip','$place','$contry','$code','$phone','$email','$uid')";
            $result=mysqli_query($con,$sql1);

            if($result)
            {
                echo"<script>
                    
                    swal({
                    title: 'Thank you!',
                    text: 'Your Regestration was successfully stored in our database',
                    type: 'SUCCESS'
                    }).then(function() 
                    {
                        window.location = 'reg.php';
                    });
                    
                    </script>";
            }
            else
            {
                echo"<script>
                    
                    swal({
                    title: 'OOPS!',
                    text: 'Somthing went wrong, please try again',
                    type: 'ERROR'
                    }).then(function() 
                    {
                        window.location = 'reg.php';
                    });
                    
                    </script>";
            }
            
        }

    ///

    
}
?>