<?php

add_action( 'woocommerce_after_add_to_cart_button', 'quote_extra_button' );

function quote_extra_button() {
    $current_product_id = get_the_ID();
    $product = wc_get_product( $current_product_id );
    $tel_seller = '521234567890';

    echo '<a href="https://wa.me/'.$tel_seller.'?text=Hola,%20estoy%20interesado%20en%20el%20producto%20llamado:%20'.$product->get_name().'%20con%20SKU:%20'.$product->get_sku().'%20que%20vi%20en%20su%20sitio%20web.%20¿Podrías%20asesorarme?" class="single_add_to_cart_button button alt">Cotizar ahora</a>';
}

?>