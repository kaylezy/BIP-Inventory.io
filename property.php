<?php

    //connect to database
    $host = '127.0.0.1';
    $username = 'root';
    $password = '';
    $dbname = 'test_umbrella';

    $db_connection = new mysqli($host,$username,$password,$dbname);

    if($db_connection->connect_error){
        print_r($db_connection->connect_error);
    }

    $property_select_statement = "SELECT * FROM properties";
    $properties = $db_connection->query($property_select_statement);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KPL | Inventory</title>
</head>
<body>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>KPL | Inventory</title>
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <style>
         .container{
             margin-left: 20%;
             width: 55%;
             border: 1px solid blue;
             padding: 10px;
        }
    
        .cover-all{
            padding: 10px;
            background-color: gray;
            border: 1px solid blue;
        }
    
        .logo img{
            width: 15%;
            height: 15%;
        }
    
        img:hover{
            background-color: white;
        }
    
        .headings h1{
            text-align: center;
            margin-top: -100px;
            margin-left: 20%;
            width:70%;
            color: blue;
        }
    
        h1{
            text-shadow: 3px 3px 1px white;;
        }
    
        .information-page ul li{
            display: inline;
            padding: 2px;
            margin-left: 65px;
            border: 1px solid gray;
        }
    
        ul li:hover{
            background-color: blue;
            border: 1px solid blue;
            border-radius: 5px;
            color: white;
        }
    
      
    
        a{
            line-height: 50px;
            color: black;
        }
    
        .Sign-up h2{
            text-align: right;
            margin-right: 200px;
        }
    
        .property{
            border: 1px solid blue;
            background-color: gray;
            font-weight: bold;
            color: black;
            padding: 10px;
            width: 68%;
            margin-left: 200px;
            border-radius: 5px;
        }
    
        button{
            text-align: right;
            border-radius: 10px;
            margin-left: 150px;
            }
    
    </style>

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
                    <a href="index.html">Logout Page</a> <br>
                    <a href="property.html">Properties Information</a> <br>
                    <a href="customer.html">Customer Information</a> <br>
                    <a href="staff.html" target="_blank">Staff Details</a> <br>
            </div>
    
            <div class="Sign-up">
                <h2>Properties Information</h2>
            </div>
    
           <div class="property">
            <?php 
            if($properties->num_rows > 0){
                $n = 1;
                while($row = $properties->fetch_assoc()) {
                    echo "$n <a href='details.php?id=$row[id]'>" . $row['property_name'] ."</a><br />";
                    $n++;
                }

            }

             

            ?>

            <br> <br>
                <button type="menu"> Back </button> 
               <button type="menu"> Next </button>
  
           </div>

            
        </div>
    </body>
    </html>


</body>
</html>