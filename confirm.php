<?php
    include 'header.php';
    include 'functions.php';
    if(isset($_SESSION['name']) == false){
        redirect('index.php');
    }
    ?>
    <div class='container text-center'>
        <br><h1>Stevens Comment Form</h1>
        <p>Please review the following Information and confirm it is correct</p><br>
    </div>

    <div class="container text-center">
    <form class="" action="" method="post" enctype="multipart/form-data" onsubmit="">

        <br><label for='usersname' class="form-control">Name</label>
        <input type='text' id='usersname' name='usersname' class="form-control" value='<?php echo ($_SESSION['name'])?>' readonly><br>

        <label for='email' class="form-control">Email</label>
        <input type='email' id='email' name='email' class="form-control" value='<?php echo ($_SESSION['email'])?>' readonly><br>

        <label for='type' class="form-control">Contact Type</label>
        <input id='type' name='type' class="form-control" value='<?php echo ucfirst(($_SESSION['type']))?>' readonly><br>


        <label for='comment' class="form-control">Comment</label>
        <textarea id="comment" name="comment" rows="5" cols="100" class="form-control" readonly> <?php echo ($_SESSION['comment'])?></textarea><br>

        <div class="d-grid gap-2 d-md-flex justify-content-center btn-group">
            <button class="btn btn-warning" type="submit" id='edit' name='edit'>Edit</button>
            <button class="btn btn-success" type="submit" id='submit' name='submit'>Confirm</button> 
        </div>
        <?php confirmForm() ?>
        
    </form>
</div>



<?php include 'footer.php'?>