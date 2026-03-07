<!DOCTYPE html>
<html>
<head>
<title>Create Your Profile</title>

<style>
body{
    font-family: Serif;
    background: linear-gradient(135deg,#2EB62C,#00B2CE);
    margin:0;
    padding:0;
}

.container{
    width:420px;
    margin:50px auto;
    background:whitesmoke;
    padding:30px;
    border-radius:10px;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
    box-sizing:border-box;
}

h2{
    text-align:center;
    margin-bottom:20px;
}

label{
    font-weight:bold;
}

input, textarea{
    width:100%;
    padding:10px;
    margin-top:5px;
    margin-bottom:15px;
    border-radius:5px;
    border:1px solid #ccc;
    box-sizing:border-box;
}

.options{
    margin-bottom:15px;
}

.options input{
    width:auto;
    margin-right:5px;
}

button{
    width:100%;
    padding:10px;
    background:#667eea;
    color:white;
    border:none;
    font-size:16px;
    border-radius:5px;
    cursor:pointer;
}

button:hover{
    background:#5a67d8;
}
</style>
</head>

<body>

<div class="container">

<h2>Create Your Profile</h2>

<form action="profile.php" method="POST" enctype="multipart/form-data">

<label>Full Name</label>
<input type="text" name="fullname" required>

<label>Age</label>
<input type="number" name="age" required>

<label>Course / Program</label>
<input type="text" name="course" required>

<label>Email Address</label>
<input type="email" name="email" required>

<label>Gender</label>
<div class="options">
<input type="radio" name="gender" value="Male" required> Male
<input type="radio" name="gender" value="Female"> Female
</div>

<label>Hobbies</label>
<div class="options">
<input type="checkbox" name="hobbies[]" value="Dancing"> Dancing<br>
<input type="checkbox" name="hobbies[]" value="Gaming"> Gaming<br>
<input type="checkbox" name="hobbies[]" value="Sports"> Sports<br>
<input type="checkbox" name="hobbies[]" value="Music"> Music<br>
<input type="checkbox" name="hobbies[]" value="Traveling"> Traveling
</div>

<label>Short Biography</label>
<textarea name="bio" rows="4"></textarea>

<label>Upload Profile Image</label>
<input type="file" name="profile_image" required>

<button type="submit">Generate My Profile</button>

</form>

</div>

</body>
</html>
