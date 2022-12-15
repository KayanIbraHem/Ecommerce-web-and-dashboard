<?php
session_start();
unset($_SESSION['loginUserID']);
header("location:../../userlogin.php");

