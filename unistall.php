<?php
//if uninstall not called from WordPress exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) 
    exit();

// Deleta as opções
delete_option( 'whats-easy' );
delete_site_option( 'whats-easy' );