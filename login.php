<?php
session_start();
include "db_con.php";

if (isset($_POST['user']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }
    $user = validate($_POST['user']);
    $password = validate($_POST['password']);

if (empty($user)) {
    header("Location:index.php?error=Username is required");
    exit();
} else if (empty($password)) {
    header("Location:index.php?error=Password is required");
    exit();
} else {
    $sql = "SELECT * FROM cred WHERE username= '$user' AND password= '$password' ";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) === 1  ) {
      $row = mysqli_fetch_assoc($result);
      if ($row['username'] === $user && $row['password'] === $password ) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: home.php");
            exit();
      }else{
            header("Location:index.php?error=Incorect Username and Password");
            exit();
       }      
   }else{
    header("Location:index.php?error=Incorect Username and Password");
    exit();
   } 
    
}

}else {
    header("Location:index.php");
    exit();
}