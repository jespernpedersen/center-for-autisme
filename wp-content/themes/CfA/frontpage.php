<?php 
/*
Template Name: Full-width layout
Template Post Type: post, page, event
*/


get_header();
?>

<main role="main" id="frontpage">
    <section class="hero-section">
        <div class="container">
            <div class="left-column">
                <h1>WordPress Hjemmeside</h1>
                <p>Lorem ipsum</p>
            </div>
            <div class="right-column">
            </div>
        </div>
    </section>
    <div class="container">
        <div class="why-wordpress">
            <article class="section-left">
                <article class="section_text">
                    <h2>Why WordPress?</h2>
                    <p>Lorem ipsum</p>
                </article>
            </article>
        </div>
        
        <div class="why-wordpress">
            <article class="section-right">
                <article class="section_text">
                    <h2>Why WordPress?</h2>
                    <p>Lorem ipsum</p>
                </article>
            </article>
        </div>
    </div>
    <div class="reasonable-prices">
        <section class="container">
            <h2>Why WordPress?</h2>
            <p>Lorem ipsum</p>
        </section>
    </div>
</main>

<style>

    
html {
        margin-top: 0 !important;
    }
    
</style>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
        crossorigin="anonymous">
</script> 
<script src="/wp-content/themes/jespernpedersen/assets/js/behaviour.js"></script>

<script src="//wp-content/themes/jespernpedersen/assets/js/scripts.js"></script>
<?php
get_footer();