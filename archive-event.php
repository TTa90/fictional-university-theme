<?php 

get_header(); 
pageBanner(array(
  'title' => 'All Events',
  'subtitle' => 'See what we have going on.'
)); 
?>


<div class="container container--narrow page-section">
<?php 
  while (have_posts()) {
    the_post();
    get_template_part('templateParts/content-event');
    }
  echo paginate_links(  );
?>

<hr class="section-break">

<p>Looking for a recap of past event? <a href="<?php echo site_url('/past-events') ?>">Click Here!</a></p>

</div>


<?php get_footer();

?>