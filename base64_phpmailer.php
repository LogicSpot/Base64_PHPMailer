<?php
/*
Plugin Name:  Base64 Emails
Plugin URI:
Description:  Sets PHPMailer to use base64 encoding.
Version:      1.0.0
Author:       LogicSpot
Author URI:   https://www.logicspot.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

namespace WordPress\LogicSpot;

\add_action('phpmailer_init', __NAMESPACE__ . '\\base64_phpmailer');

function base64_phpmailer($phpmailer){
    $phpmailer->Encoding = 'base64';
}