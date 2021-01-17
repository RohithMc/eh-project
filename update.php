<?php
    include 'db.php';
 
    session_start();
    $id=$_SESSION['id'];
    $query=mysqli_query($conn,"SELECT * FROM users where id='$id'");
    $row=mysqli_fetch_array($query);

?>


<html>
<head>
<title>Profile Page</title>
</head>
<body>

<center>
    <h2>Update Your Profile</h2>
    <form action="" method="POST">
        <p>Username</p>
        <input type="text" name="username" class="input-box" placeholder="Enter Your Username" value="<?php echo $row['username'] ?>"/>
        <p>E-mail</p>
        <input type="text" name="email" class="input-box" placeholder="Enter Your E-mail" value="<?php echo $row['email'] ?>"/><br>
        <input type="submit" name="update" value="Update"/><br>
    </form>
</center>
</body>
</html>



<?php
$conn = mysqli_connect("localhost","root","","register");



if(isset($_POST['update'])) {
    $username = $_POST['username'];

    $query = "UPDATE `users` SET username='$_POST[username]', email='$_POST[email]' WHERE id='$id' ";
    $query_run = mysqli_query($conn,$query);

    if($query_run) {
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
        header('location: home.php');

    }
    else {
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
        
    }

}
    

?>