<?php
session_start();
session_unset("users");
header("Location: index.php");  ?>
