<?php
//connect the database
include 'dbconnect.php';
 
//get the payment details from payment page
 
if(isset($_POST['payment_id']) && isset($_POST['amount']) && isset($_POST['name']))
{
    $paymentId = $_POST['payment_id'];
    $amount = $_POST['amount'];
    $name = $_POST['name'];
 
    //insert data into database
    $sql="INSERT INTO `payment`(`name`, `amount`, `payment_status`, `payment_id`, `paid_on`) VALUES ('$name','$amount','','','')";
    
    // $sql="INSERT INTO razorpay_payment(name,amount,payment_status,payment_id)VALUES('$name','$amount','paid','$paymentId')";
    $stmt=$con->prepare($sql);
    $stmt->execute();
}else{
    echo "Payment failed...";
}

?>