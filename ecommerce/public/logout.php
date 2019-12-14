<?php
session_start();
session_unset("user");
header("Location: admin.php");  ?>
