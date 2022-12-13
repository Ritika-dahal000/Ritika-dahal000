<?php
session_start();

// session_destroy();
unset($_SESSION['password']);
die;//ignores lines below here.
?>