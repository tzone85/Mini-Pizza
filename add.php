<?php
    
?>

<!DOCTYPE html>
<html lang="en">

    <?php include('templates/header.php') ?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form action="add.php" class="white" method="GET">
            <label for="">Your Email:</label>
            <input type="text" name="email">

            <label for="">Pizza Title:</label>
            <input type="text" name="title">

            <label for="">Ingredients (comma separated):</label>
            <input type="text" name="ingredients">
            <div class="center">
                <input type="submit" name="submit" value="submit" class="brand btn z-depth-0">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php') ?>
    

</html>