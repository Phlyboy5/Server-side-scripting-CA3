<?php
if (isset($_GET['title'])) {
include("connect.php");
$title = $_GET['title'];
$sql = "DELETE FROM books WHERE title='$title'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Book Deleted Successfully!";
    header("Location:index.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Book does not exist";
}
?>