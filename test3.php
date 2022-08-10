<?php
    require_once(dirname(__FILE__) . '/wp-config.php');
    $wp->init();
    $wp->parse_request();
    $wp->query_posts();
    $wp->register_globals();
    
    // $response = wp_remote_post('https://www.yeggiwithus.com/test.php',
    $response = wp_remote_post(home_url().'/test.php',
        [
            'timeout' => 30,
            'method' => 'POST',
            'body' => [
                'say2' => "Mom",
                'to' => "Hello",
            ]
        ]
    );

    echo wp_remote_retrieve_body($response);


