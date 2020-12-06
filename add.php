<?php

?>

<!DOCTYPE html>
<html lang="en">
<!--Header and navbar-->

<link rel="stylesheet" href="css\add.css">
<?php include('./templates/header.php'); ?>

<section class="continer grey-text">
    <h4 class="center">Add a note </h4>
    <form class="white" action="" method="">
<br>
        <input type="text" placeholder="Title" name="title" id="">
        <br> 
        <input type="text" name="desc" id="" placeholder="Take a note">

        <div class="center">
            <br>
            <input type="submit" value="Add" name="submit" class="btn brand z-depth-0 ">
        </div>
    </form>
</section>



<!--Footer-->
<?php include('./templates/footer.php'); ?>

</html>