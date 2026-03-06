<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $bio = $_POST['bio'];

    $hobbies = "";
    if(isset($_POST['hobbies'])){
        $hobbies = implode(", ", $_POST['hobbies']);
    }

    $imageName = $_FILES['profile_image']['name'];
    $tempName = $_FILES['profile_image']['tmp_name'];

    $folder = "uploads/".$imageName;

    move_uploaded_file($tempName,$folder);

}
?>

<!DOCTYPE html>
<html>
<head>
<title>My Profile</title>

<style>
body{
    font-family: Serif;
    background: linear-gradient(135deg,#2EB62C,#00B2CE);
}

.profile-card{
    width:420px;
    margin:60px auto;
    background:white;
    border-radius:12px;
    padding:25px;
    text-align:center;
    box-shadow:0 10px 20px rgba(0,0,0,0.2);
}

.profile-card img{
    width:150px;
    height:150px;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:15px;
}

.info{
    text-align:left;
    margin-top:20px;
}

.info p{
    margin:8px 0;
}

.bio{
    margin-top:15px;
    background:#f7f7f7;
    padding:10px;
    border-radius:5px;
}
</style>
</head>

<body>

<div class="profile-card">

<img src="<?php echo $folder; ?>">

<h2><?php echo $fullname; ?></h2>

<div class="info">

<p><b>Age:</b> <?php echo $age; ?></p>
<p><b>Course:</b> <?php echo $course; ?></p>
<p><b>Email:</b> <?php echo $email; ?></p>
<p><b>Gender:</b> <?php echo $gender; ?></p>
<p><b>Hobbies:</b> <?php echo $hobbies; ?></p>

</div>

<div class="bio">
<b>Biography</b><br>
<?php echo $bio; ?>
</div>

</div>

</body>
</html>