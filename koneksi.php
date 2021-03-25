<?php
$conn = mysqli_connect("localhost", "root", "", "db_buku");

if (mysqli_connect_errno()){
    echo "Connection failed : " . mysqli_connect_errno();
} else {
}