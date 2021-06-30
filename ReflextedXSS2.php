<?php

// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {

    // Get input
    //Hàm htmlspecialchars () chuyển đổi một số ký tự(>,<,?,'',"&) được xác định trước thành HTML entities.
    $name = htmlspecialchars( $_GET[ 'name' ] );
    // Feedback for end user
    echo "<pre>Hello ${name}</pre>";
}
?> 