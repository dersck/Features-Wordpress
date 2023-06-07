<?php

add_action( 'login_enqueue_scripts', 'redesign_login' );

function redesign_login() {

    ?>
    <style type = 'text/css'>

    body.login div#login h1 a {

        background-image: url( https://yourlogourl );
        background-size: 100%;
        width: 120px;
        height: 120px;
        padding-bottom: 30px;
        margin-left: 27%;
    }
    body.login {
        background: #f4a939;
    }
    .login form#loginform {
        border-radius: 10px;
        border: 0;
    }
    .login form#loginform label {
        color: #000000;
    }
    .login form .input, .login input[ type = password ], .login input[ type = text ], .login input#rememberme {
        background: #ffffff;
        border: 1px solid #f4a939;
    }
    .wp-core-ui input#wp-submit.button-primary {
        background: #1d1d1b;
        border: 0;
    }
    .wp-core-ui .button-secondary {
        color: #f4a939 !important;
    }
    #nav, #backtoblog {
        text-align: center;
    }
    .login p#nav, .login p#nav a, .login p#backtoblog a {
        color: #1d1d1b;
    }
    .login p#nav a:hover, .login p#backtoblog a:hover {
        color: #ffffff;
    }
    .login .privacy-policy-page-link a {
        color: #ffffff;
    }
    .login .privacy-policy-page-link a:hover {
        color: #1d1d1b;
    }
    .login div.language-switcher form#language-switcher label span.dashicons {
        color: #1d1d1b;
    }
    .login div.language-switcher form#language-switcher select#language-switcher-locales {
        border: 0;
    }
    .login div.language-switcher form#language-switcher input.button {
        background: #1d1d1b;
        border: 0;
        color: #ffffff;
    }

    </style>
    <?php
}

?>