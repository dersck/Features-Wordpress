<?php

add_filter( 'wp_mail_from', 'change_email_address' );

function change_email_address ( $email_address ) {
    if ( $email_address === 'wordpress@yourdomain.com' )
    return 'new_email_address@yourdomain.com';
    else
    return $email_address;
}

?>