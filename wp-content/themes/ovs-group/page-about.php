<?php
/*
Template Name: О компании
*/
?>
<?php get_header();?>

<main class="main">

    <div class="container">
        <?php 
            $site_img_logo =  carbon_get_theme_option('site_logo');
            $site_img_src_logo =  wp_get_attachment_image_url($site_img_logo, 'full');
            $site_img_src_webp_logo = convertToWebpSrc($site_img_src_logo);
        ?>
        <p style="dispaly: block; margin:200px 0;">
            
        </p>
    </div>

</main>

<?php get_footer();?>