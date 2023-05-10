<?php
$pageTitle = "Home page"
?>
<!-- From value show -->
<?php
if(isset($_POST['Add'])){
   $name = $_POST['name']; 
   $email = $_POST['email']; 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?></title>
</head>
<body>
    <h1 align="center"><?php echo $pageTitle ?></h1>
    <!-- From start -->
    <form action="" method="POST">
        <input type="text" placeholder="Enter your name" name="name"><br><br>
        <input type="email" placeholder="Enter your Eamil" name="email"><br><br>
        <input type="submit" value="Submit" name="Add">
    </form>
<br><br>
<!-- Table start -->
<table border="1" celspacing="0" cellpadding="10px">
    <tr>
        <th>SL. No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Rmark</th>
    </tr>
    <tr>
        <td>1</td>
        <td><?php if(isset($_POST['Add'])){echo $name; } ?></td>
        <td><?php if(isset($_POST['Add'])){echo $email; } ?></td>
        <td></td>
    </tr>
</table>

<!-- print 1 to 1000 with for Loop -->

<h2>Print 1 to 1000 Using for Loop</h2>

<?php
for($i=1; $i<=1000; $i++){
    echo $i ." ";
}
?>

<!-- print 1 to 100 Odd number -->

<h2>Print 1 to 100 Odd Number</h2>

<?php
for($i=1; $i<=100; $i++){
    if($i%2 != 0){
        echo  $i." ";
    }
}
?>

<!-- print 1 to 100 Even number -->

<h2>Print 1 to 100 Even Number</h2>

<?php
for($i=1; $i<=100; $i++){
    if($i%2 == 0){
        echo  $i." ";
    }
}
?>
    
</body>
</html>