<?php

    session_destroy();
    session_start();
    header("location: index.php");
    ob_end_flush();
    
?>