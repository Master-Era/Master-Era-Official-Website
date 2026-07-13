<?php

include 'db_connect.php';

$name = $_POST['name'];
$company = $_POST['company'];
$rating = $_POST['rating'];
$feedback = $_POST['feedback'];

$sql = "INSERT INTO feedback(name, company, rating, feedback)
VALUES('$name','$company','$rating','$feedback')";

if($conn->query($sql) === TRUE){
    echo "<script>
    alert('Feedback Submitted Successfully');
    window.location='feedback.html';
    </script>";
}
else{
    echo "Error";
}

?>