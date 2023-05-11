<?php
$title = "Grocery Store Website | Contact";
?>
<!-- Header part -->
<?php include("includes/header.php")?>


<section class="contact" id="contact">

<h1 class="heading"> contact <span> now </span> </h1>

<div class="row">

    <div class="image">
        <img src="images/contact.png" alt="">
    </div>

    <form action="">

        <div class="inputBox">
            <input type="text" placeholder="first name">
            <input type="text" placeholder="last name">
        </div>

        <div class="inputBox">
            <input type="email" placeholder="email address">
            <input type="number" placeholder="phone">
        </div>

        <textarea placeholder="message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="order now" class="btn">
    </form>

</div>

</section>



<!-- Footer part -->
<?php require_once("includes/footer.php")?>