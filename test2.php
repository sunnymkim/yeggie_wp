<?php
    require_once(dirname(__FILE__) . '/wp-config.php');
    $wp->init();
    $wp->parse_request();
    $wp->query_posts();
    $wp->register_globals();
    #$wp->send_headers();

    #get_header();

    // if ( !empty( $_POST ) ) {
    //     echo "Hi", $_POST['fullname'], "<br>";
    //     echo "The post requested processed";
    // }

?>

<div id="content">
    <!-- <form action="" method="post"> -->
    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
        <label for="fullname">Full Name</label>
        <input type="text" name="fullname" id="fullname" required>
        <input type="hidden" name="action" value="contact_form">
        <input type="submit" value="Send My Message">
    </form>
</div>

<?php
#get_footer();