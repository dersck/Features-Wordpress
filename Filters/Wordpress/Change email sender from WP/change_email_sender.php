<?php

add_filter( 'wp_mail_from_name', 'change_email_name_sender' );

function change_email_name_sender( $email_from ) {
    if ( $email_from === 'WordPress' )
    return 'Your new Email Name Sender';
    else {
        return $email_from;
    }
}

?>