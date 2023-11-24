<?php
    // Start a Session, You might start this somewhere else already.
    session_start();

    // What languages do we support
    $availableLangs = array('en', 'cn', 'vi');

    // Set our default language session
    // $_SESSION['lang'] = 'vi';   

    if (isset($_GET['lang']) && $_GET['lang'] != '') { 
        // check if the language is one we support
        if (in_array($_GET['lang'], $availableLangs)) {       
            $_SESSION['lang'] = $_GET['lang'];
        }
    }

    // Include active language
    include('langs/' . $_SESSION['lang'].'.php');
?>
