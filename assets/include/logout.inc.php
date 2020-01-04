<?php
// DESTROY CURRENT USER SESSION
session_start();
session_unset();
session_destroy();
header("Location: ../../index.php?logout=success");