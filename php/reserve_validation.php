<?php
    if (isset($_POST['submit'])){
    $timestamp = strtotime($start_time);
        if ($timestamp < time() + 21600) {
        die('Reservations must be made at least 6 hours in advance.');
        }
    }
?>