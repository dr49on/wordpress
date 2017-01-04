<?php
/**
 * Template Name: Full Width
 **/
get_header(); ?>
<!--Page template start from here-->
<!-- <div class="blog-wrapper">
    <div class="icoach-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12  pull-right">
                    <div class="blog-content-area fadeIn animated">
                         
                    </div>
                </div>
                <?php //get_sidebar(); ?>
            </div>
        </div>
    </div>
</div> -->
<div class="container">
    <div class="row">
        <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php if (comments_open($post->ID) ) {
                //comments_template( '', true );
            } ?>
        <?php endwhile;  ?> 
    </div>
</div>
<?php get_footer(); ?>