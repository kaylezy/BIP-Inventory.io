<?php session_start();

$error_messages = '';

$property_name = $_POST['property_name'] != "" ? $_POST['property_name'] : $error_messages = 'property name is required <br />' ;
$location = $_POST['location'] != "" ? $_POST['location'] : $error_messages = 'location is required <br />' ;
$sqrm = $_POST['sqrm'] != "" ?  $_POST['sqrm'] : 'NA';
$ppsm = $_POST['ppsm'] != "" ? $_POST['ppsm'] : 'NA';


$images = [
            "https://i.ytimg.com/vi/mb4irevK_Is/maxresdefault.jpg",
            "https://images.homify.com/c_fill,f_auto,h_240,q_auto,w_240/v1523948686/p/photo/image/2522509/3d-exterior-rendering-home.jpg",
            "https://www.thehousedesigners.com/images/plans/AMD/uploads/9458/9458_Resized_Image.jpg",
            "https://i.ytimg.com/vi/jxXy4dsxzhw/hqdefault.jpg"
];

$image = $images[rand(0,3)];


if($error_messages != ''){
    print_r($error_messages);
    die();
}

$host = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'test_umbrella';

$db_connection = new mysqli($host,$username,$password,$dbname);

if($db_connection->connect_error){
    print_r($db_connection->connect_error);
}

$insert_property_statement = "INSERT INTO properties (property_name,location,square_meter,ppsm,image) VALUES('$property_name','$location','$sqrm','$ppsm','$image')";

$try = $db_connection->query($insert_property_statement);

if($try){
   
    $_SESSION['message'] = "property added";
    header('location: admin.php');

}else{
    print_r($db_connection->error);
}
