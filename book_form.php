<?php

$connection = mysqli_connect('localhost' , 'root' , '' , 'cart_db');

if(isset($_POST['sumbit'])){
    $firstname= $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address= $_POST['address'];
    $location = $_POST['location'];
    $credit = $_POST['credit'];
    
    $request ="insert into book_form(firstname , lastname , email , phone , address , location , credit)values
('$firstname' , '$lastname' , '$email' , '$phone' , '$address' , '$location' , '$credit')" ;

    mysqli_query($connection , $request);

    header('location:cart.html');

}else{
    echo'you can do it';

}

    

?>