<?php
$conn = mysqli_connect("localhost","root","password","library");

if (!$conn){
    echo 'not connected';
}else{
    echo 'connected';
}

