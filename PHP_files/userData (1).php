<?php
function getUserDetails($conn, $Email)
{
    $query = "SELECT customers.* FROM customers WHERE customers.Email
= '$email' AND customers.password = '$password';";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return ($row);
}
