<?php
//This file is ommitted from github for security reasons however included in it is setting the session and starting it. As well as this it contains the connection string for conenecting to my database.
require 'config.php';

//Basic worker function as im lazy and dont want to type Location everytime
function redirect($location){
	header("Location: $location");
}

/*
Listener function for the index page. The logic i used to implement this solution was through the use of session variables. 
All Pages check for session variables if they arent set you will always end up on the index page.
Confirm page sets the values of the locked input fields through the use of session variables (ideally these would be wiped after setting values on a bigger site but its late)
Index page also checks for these values and sets value to theses if they exist.
Once final submit button is pressed these are uploaded to database and the session is destroyed.
*/

function submit(){
    if(isset($_POST['submit'])){
        $_SESSION['name'] = $_POST['usersname'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['type'] = $_POST['type'];
        $_SESSION['comment'] = $_POST['comment'];
        
        redirect('confirm.php');
    }
}

function confirmForm(){

    GLOBAL $connection;

    if(isset($_POST['edit'])){
        redirect('index.php');
    }

    if(isset($_POST['submit'])){
        $stmt = $connection->prepare("INSERT INTO web_contacts (name,email,contact_type,comment) VALUES(?,?,?,?)");
        $stmt->bind_param("ssss", $_SESSION['name'],$_SESSION['email'],$_SESSION['type'],$_SESSION['comment']);
        $stmt->execute();
        $stmt->close();

        session_destroy();
        redirect('index.php');
    }
}

?>