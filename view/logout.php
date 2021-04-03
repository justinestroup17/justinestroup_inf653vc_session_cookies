<?php
    echo 'Thank you for signing out, '.$_SESSION['userid'].'.';
    $_SESSION = array();   // Clear all session data from memory
    session_destroy();     // Clean up the session ID ?>
    <p><a href="http://localhost/justine_stroup_inf653vc_session_cookies/">Click here </a> to view our vehicles list</p>
