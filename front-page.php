<?php get_header(); ?>

<main class="home-container">
    <section class="hero">
        <h1>Welcome to Our Custom Theme</h1>
        <p>This layout is fully custom-coded based on Figma design.</p>
    </section>

    <section class="testimonials">
        <h2>Testimonials</h2>
        <div class="testimonial-wrapper">
            <?php
            $args = ['post_type' => 'testimonial'];
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                get_template_part('template-parts/content', 'testimonial');
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
