<?php
function returnConnection() {
    return mysqli_connect("localhost", "root", "", "base1");
}
?>