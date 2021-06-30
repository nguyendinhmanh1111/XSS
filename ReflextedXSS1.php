<?php

header ("X-XSS-Protection: 0");

// tồn tại user
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
    // Get input(chúng ta có thể khai thác ở phần này)
    $name = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_GET[ 'name' ] );

    // Feedback user
    echo "<pre>Hello ${name}</pre>";
}

?> 