<?php
//Include Header file which enables error reporting for debugging and includes the basic head elements
//Include functions file which contains all the worker functions for the form
include 'header.php';
include 'functions.php';
?>

<div class="container text-center">
    <br><h1>Stevens Comment Form</h1>
    <p>Please fill out the form below and we will view and respond as soon as possible</p><br>
</div>

<!-- PHP included in form is a less than ideal implementation of how i would wish to implement the edit ability. Logic is explained in functions.php -->

<div class="container text-center">
    <form class="" action="" method="post" enctype="multipart/form-data" onsubmit="">

        <br><label for='usersname' class="form-control">Name</label>
        <input type='text' id='usersname' name='usersname' class="form-control" required value='<?php if(isset($_SESSION['name']) == true){ echo $_SESSION['name']; }?>'><br>

        <label for='email' class="form-control">Email</label>
        <input type='email' id='email' name='email' class="form-control" required value='<?php if(isset($_SESSION['email']) == true){ echo $_SESSION['email']; }?>'><br>

        <label for='type' class="form-control">Contact Type</label>
        <select id='type' name='type' class="form-control form-select" required>
            <option disabled selected value> -- select an option -- </option>
            <option value='query' <?php if(isset($_SESSION['type']) == true){ if($_SESSION['type'] == 'query'){ echo 'selected value';} }?>>Query</option>
            <option value='feedback' <?php if(isset($_SESSION['type']) == true){ if($_SESSION['type'] == 'feedback'){ echo 'selected value';} }?>>Feedback</option>
            <option value='complaint' <?php if(isset($_SESSION['type']) == true){ if($_SESSION['type'] == 'complaint'){ echo 'selected value';} }?>>Complaint</option>
            <option value='other' <?php if(isset($_SESSION['type']) == true){ if($_SESSION['type'] == 'other'){ echo 'selected value';} }?>>Other</option>
        </select><br>

        <label for='comment' class="form-control">Comment</label>
        <textarea id="comment" name="comment" rows="5" cols="100" class="form-control" required><?php if(isset($_SESSION['comment']) == true){ echo $_SESSION['comment']; }?></textarea><br>

        <input id="submit" type="submit" name="submit" value="Submit" class="form-control btn btn-primary">
	    <?php submit();?>
    </form>
</div>


<?php 
//Include footer file normally stuff would be in footer file but didnt program anything for it in this one.
include 'footer.php';
?>
