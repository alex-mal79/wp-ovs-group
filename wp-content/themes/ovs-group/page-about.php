<?php
/*
Template Name: О компании
*/
?>
<?php get_header();?>

<main class="main">

    <div class="container">
        <p style="dispaly: block; margin:200px 0;">
            <?php echo wp_get_attachment_image_url(carbon_get_theme_option('site_logo'));?>
            
        </p>
    </div>

</main>

<?php get_footer();?>