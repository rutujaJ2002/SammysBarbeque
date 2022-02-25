<?php

session_start();
session_destroy();

echo ("<script LANGUAGE='JavaScript'>
            window.location.href='../index1.php';
            </script>");
?>