<?php


if ( array_key_exists( "default", $_GET ) && !is_null ($_GET[ 'default' ]) ) {

    # chúng ta sử dụng White list
    switch ($_GET['default']) {
        case "French":
        case "English":
        case "German":
        case "Spanish":
            # ok
            break;
        default:
            header ("location: ?default=English");
            exit;
    }
}

?> 