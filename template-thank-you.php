<?php
/**
 * Template Name: Thank You
 * Description: A custom home page template for the website.
 */

get_header(); 
?>

<main id="main" class="site-main">
    <section class="section-thank-you">
        <div class="section-thank-you-wrapper">
            <div class="section-thank-you-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/logo.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="section-thank-you-header-box">
                <h1 class="section-thank-you-header">THANK YOU</h1>
            </div>
            <div class="section-thank-you-paragraph-box">
                <p class="section-thank-you-paragraph">Thank you for registering<br class="m"> for the ANGA event.<br>Your registration has been<br class="m"> successfully processed.</p>
            </div>
        </div>
    <section>

</main>

<?php
get_footer(); 
?>
