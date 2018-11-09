<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli("localhost", "root", "root", "website");

//the form has been submitted with post
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //two passwords are equal to each other
    if ($_POST['UserPassword'] == $_POST['confirmpassword']) {
        
        //set all the post variables
        $username = $mysqli->real_escape_string($_POST['Username']);
        $email = $mysqli->real_escape_string($_POST['UserEmail']);
        $password = md5($_POST['UserPassword']); //md5 hash password security
        $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);
        
        //make sure the file type is image
        if (preg_match("!image!",$_FILES['avatar']['type'])) {
            
            //copy image to images/ folder
            if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){
                
                //set session variables
                $_SESSION['Username'] = $username;
                $_SESSION['avatar'] = $avatar_path;
                
                //insert user data into database
                $sql = "INSERT INTO users (Username, UserEmail, UserPassword, avatar) "
                        . "VALUES ('$username', '$email', '$password', '$avatar_path')";
                
                //if the query is successful, redirect to welcome.php page, done!
                if ($mysqli->query($sql) === true) {
                    $_SESSION['message'] = "Registration successful! Added $Username to the database!";
                    header("location: welcome.php");
                }
                else {
                    $_SESSION['message'] = 'User could not be added to the database!';
                }
                $mysqli->close();
            }
            else {
                $_SESSION['message'] = 'File upload failed!';
            }
        }
        else {
        	$_SESSION['message'] = 'Please only upload GIF, JPG or PNG images!';
        }
    }
    else {
        $_SESSION['message'] = 'Two passwords do not match!';
    }
}
?>