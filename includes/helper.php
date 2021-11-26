<?php
    function redirectTo($path) {
        header('location: ' . $path);
    }

    function getFormattedDateTime() {
        return date('Y-m-d H:i:s');
    }
?>
