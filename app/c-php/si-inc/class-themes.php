<?php
function SI_LoadPage($theme, $page) {
    if (is_dir($theme)) {
        require SI_THEME . $theme . "/index.php";

        echo $page;
    } else {
        $msg = "tema belum di install";
    }
    return $msg;
}