<?php
/*
  WPDEVELOPERTHEME HELP: BOOSTRAP EXAMPLE
  <div class="container"> or container-fluid
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        </div>
    </div>
  </div>
*/
get_header();
?>
<!-- YOAST BREADCRUMB -->
<?php if ( function_exists('yoast_breadcrumb') )
  {
    yoast_breadcrumb('<p id="breadcrumbs">','</p>');
  }
?>
<!-- CONTENT -->
    <a href="<?php the_permalink() ?>">
      <?php
      the_post_thumbnail('thumbnail',array('title' => get_the_title(),'class'=>'img-responsive'));
      ?>
    </a>
    <h1><a href="<?php the_permalink() ?>"><?php the_title();?></a></h1>
    <?php the_content();?>
<?php
get_footer();
?>
