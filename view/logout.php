<?php
    session_start();
    echo 'Thank you for signing out, '.$_SESSION['userid'].'!';
    session_destroy(); ?>
    <p><a href="/justine_stroup_inf653vc_session_cookies/">Click here </a> to view our vehicles list</p>