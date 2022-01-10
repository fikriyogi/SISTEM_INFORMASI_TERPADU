<?php
function SI_LoadPage($theme) {
    if (is_dir($theme)) {
        require SI_THEME . $theme . "/index.php";
    } else {
        $msg = "tema belum di install";
    }
    return $msg;
}