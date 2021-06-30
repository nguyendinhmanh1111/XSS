<?php

// nếu tồn tại 
if ( array_key_exists( "default", $_GET ) && !is_null ($_GET[ 'default' ]) ) {
    $default = $_GET['default'];
    
    //Hàm strpos() sẽ tìm kiếm vị trí đầu tiên của kí tự hoặc chuỗi con xuất hiện trong chuỗi nguồn
    if (stripos ($default, "<script") !== false) {
        header ("location: ?default=English");
        exit;
    }
}

?> 