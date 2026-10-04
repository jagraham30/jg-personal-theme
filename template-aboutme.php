<?php 
/*
Template Name: About Me
*/
?>

<?php get_header();?>

<div class="container">

    <h1><?php the_title(); ?></h1>


    <div class="row">

        <div class="col-lg-6">
            This is the left column.
        
        </div>

        <div class="col-lg-6">
            <!-- Get a part of the template from the includes folder -->
            <?php get_template_part('includes/section', 'content');?>
        </div>

    </div>


</div>


<?php get_footer();?>