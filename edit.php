<?php
require_once "config.php";
$first_name=$last_name=$email=$phone+$address="";
$first_name_error=$last_name_error=$email_error=$phone_error=$address_error="";
if(isset($_POST["id"])&&!empty($_POST["id"])){
    $id=$_POST["id"];
    $firstName=trim($_POST["first_name"]);
    if(empty($firstName)){
        $first_name_error="First Name is required.";
    }elseif(!filter_var($firstName,FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $first_name_error="First name is required.";
    }else{
        $firstName=$firstName;
    }
    $lastName=trim($_POST["last_name"]);
    if(empty($lastName)){
        $lastName_error="last Name is required.";
    }elseif(!filter_var($lastName,FILTER-VALIDATE-REGEXP,array("option"=>array("regexp"=>"/[a-zA-Z\s]+$/")))){
        $last_name_error="Last Name is invalid";
    }else{
        $lastName=$lastName;
    }
    $email=trim($_POST["email"]);
    if(empty($email)){
        $email_error="Email is required.";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_error="Invalid email format.";
    }else{
        $email=$email;
    }
    $phoneNumber=trim($_POST["phone"]);
    if(empty($phoneNumber)){
        $phone_error="Phone Number is required.";
    }else{
        $phoneNumber=$phoneNumber;
    }
    $address=trim($_POST["address"]);
    if(empty($address)){
        $address_error="Address is required.";
    }else{
        $address=$address;
    }
    if(empty($first_name_error)&&empty($last_name_error)&&empty($email_error)&&empty($phone_error)&&empty($address_error)){
        $sql="UPDATE users SET first_name='$firstName',last_name='$lastName',email='$email',phone='$phoneNumber',address='$address' WHERE ID='$id'";
        if(mysqli_query($conn,$sql)){
            header("location:index.php");
        }else{
            echo "Something went wrong. please try again later.";
        }
        }
        mysqli_close($conn);
    }else{
        if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
            $id=trim($_GET["id"]);
            $query=mysqli_query($conn,"SELECT*FROM users WHERE ID='$id'");

            if($user=mysqli_fetch_array($query)){
                $first_name=$user["first_name"];
                $last_name=$user["last_name"];
                $email=$user["email"];
                $phoneNumber=$user["phone"];
                $address=$user["address"];
            }else{
                echo "Something went wrong. Please try again later.";
                header("location:edit.php");
                exit();
            }
            mysqli_close($conn);
        }else{
            echo "Something went wrong. Please try again later.";
            header("location:edit.php");
            exit();
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Update record</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> 
            <style type="text/css">
                .wrapper{
                    width:500px;
                    margin:0 auto;
                }
</style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update User</h2>
</div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <input type="hidden" name="id" value="<?php echo $id;?>">
   <div class="form-group <?php echo (!empty($first_name_error)) ? 'has-error' : ''; 
?>"> 
<label>First Name</label> 
<input type="text" name="first_name" class="form-control" value="<?php echo 
$firstName; ?>"> 
<span class="help-block"><?php echo $first_name_error;?></span> 
</div> 
<div class="form-group <?php echo (!empty($last_name_error)) ? 'has-error' : ''; ?>"> 
<label>Last Name</label> 
<input type="text" name="last_name" class="form-control" value="<?php echo 
$lastName; ?>"> 
<span class="help-block"><?php echo $last_name_error;?></span> 
</div> 
<div class="form-group <?php echo (!empty($email_error)) ? 'has-error' : ''; ?>"> 
<label>Email</label> 
<input type="email" name="email" class="form-control" value="<?php echo 
$email; ?>"> 
PLP 
11 
AWT 
<span class="help-block"><?php echo $email_error;?></span> 
</div> 
<div class="form-group <?php echo (!empty($phone_number_error)) ? 'has-error' : ''; 
?>"> 
<label>Phone Number</label> 
<input type="number" name="phone_number" class="form-control" value="<?php 
echo $phoneNumber; ?>"> 
<span class="help-block"><?php echo $phone_number_error;?></span> 
</div> 
<div class="form-group <?php echo (!empty($address_error)) ? 'has-error' : ''; ?>"> 
<label>Address</label> 
<textarea name="address" class="form-control"><?php echo $address; 
?></textarea> 
<span class="help-block"><?php echo $address_error;?></span> 
</div> 
<input type="submit" class="btn btn-primary" value="Submit"> 
<a href="index.php" class="btn btn-default">Cancel</a> 
</form>
</div> 
</div> 
</div> 
</div> 
</body> 
</html>