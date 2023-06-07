<?php

add_filter( 'gettext', 'translate_txt_wp', 20, 3 );

function translate_txt_wp( $translated_text, $text, $domain ) {
	switch ( $translated_text ) {
		case 'Your text:' :
			$translated_text = __('Your new text');
			break;
		case 'Another text' :
			$translated_text = __( 'Yout new another text', 'woocommerce' );
			break;
	}
	return $translated_text;
}

?>