<?php
// IMPORTANT VARIABLES
$msg = "";
if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
}
$successIcon = "<ion-icon name='checkmark' class='wow rollIn'></ion-icon>";
$errorIcon = "<ion-icon name='close' class='wow rollIn'></ion-icon>";
