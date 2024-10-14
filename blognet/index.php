<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * @package Blognet
 */
get_header(); ?>
<main id="content">
    <!--container-->
    <div class="container">
        <!--row-->
        <div class="row">
                    <!--col-lg-8-->
               <?php 
                    $blognet_content_layout = esc_attr(get_theme_mod('blognet_content_layout','grid-fullwidth'));
                    if($blognet_content_layout == "align-content-left")
                    { ?>
                    <aside class="col-lg-3 col-md-4">
                        <?php get_sidebar();?>
                    </aside>
                    <?php }
                    elseif($blognet_content_layout == "grid-left-sidebar")
                    { ?>
                    <aside class="col-lg-3 col-md-4">
                        <?php get_sidebar();?>
                    </aside>
                    <?php }
                    if($blognet_content_layout == "align-content-right"){ ?>
                    <div class="col-lg-9 col-md-8 content-right">
                        <?php get_template_part('template-parts/content', get_post_format()); ?>
                    </div>
                    <?php } elseif($blognet_content_layout == "align-content-left") { ?>
                    <div class="col-lg-9 col-md-8 content-right">
                        <?php get_template_part('template-parts/content', get_post_format()); ?>
                    </div>
                    <?php } elseif($blognet_content_layout == "full-width-content") { ?>
                     <div class="col-lg-12">
                    <?php get_template_part('template-parts/content', get_post_format()); ?>
                    </div>
                     <?php }  if($blognet_content_layout == "grid-left-sidebar"){ ?>
                    <div class="col-lg-9 col-md-8 content-right">
                        <?php get_template_part('content','grid'); ?>
                    </div>
                    <?php } elseif($blognet_content_layout == "grid-right-sidebar") { ?>
                    <div class="col-lg-9 col-md-8 content-right">
                        <?php get_template_part('content','grid'); ?>
                    </div>
                    <?php } elseif($blognet_content_layout == "grid-fullwidth") { ?>
                    <div class="col-lg-12">
                    <?php get_template_part('content','grid'); ?>
                    </div>
                     <?php }  ?>
                    
                    <!--/col-lg-8-->
                 <?php if($blognet_content_layout == "align-content-right")  { ?>
                    <!--col-lg-4-->
                 <aside class="col-lg-3 col-md-4 sidebar-right">
                        <?php get_sidebar();?>
                    </aside>
                    <!--/col-lg-4-->
                  <?php } 
                    elseif($blognet_content_layout == "grid-right-sidebar")
                    { ?>
                    <aside class="col-lg-3 col-md-4 sidebar-right">
                        <?php get_sidebar();?>
                    </aside>
                    <?php }?>
        </div><!--/row-->
    </div><!--/container-->
</main>                
<?php
get_footer();
?>