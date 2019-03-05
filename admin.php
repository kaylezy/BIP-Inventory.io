<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KPL | Inventory</title>
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="cover-all">

        <div class="logo">
            <img src="image/CROWN.PNG" alt="">
        </div>

        <div class="headings">
            <h1>KINGKAY PROPERTIES LTD.</h1> 

        </div>

        <div class="information-page">
            <ul>
                <li>Home</li>
                <li>Profile</li>
                <li>Housing</li>
                <li>Lands</li>
                <li>Contact Address</li>
            </ul>

        </div>
    </div>

        <div class="Side-list">
                <a href="index.html">Logout</a> <br>
                <a href="property.html">Properties Information</a> <br>
                <a href="customer.html">Customer Information</a> <br>
                <a href="staff.html" target="_blank">Staff Details</a> <br>
                
        </div>

        <div class="Sign-up">
            <h2>Admin Page</h2>
        </div>
        <?php 
            if(isset($_SESSION['message'])){
        ?>
        <div style="border: solid 1px green; width: 90%; margin: auto; text-align: center"> 
            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>

            <?php } ?>
        <div class="forms">
            <form action="addproduct.php" method="post">
                <br>
               Properties: <input type="text" name="property_name" required> <br> <br>
               Location: <input type="text" name="location" required> <br> <br>
               Square Meter: <input type="text" name="sqrm"> <br> <br>
               Price per sq: <input type="text" name="ppsm"> <br> <br>
           
               
                        Property Image: <input type="file" name="" id="">
                        
               
                    <br><br>
            <button type="submit" class="btn">
                click to Add
            </button>
            </form>
        </div>

        
        
    </div>
</body>
</html>