<?php get_header(); 

while(have_posts()) {
	the_post();
?>
  <section class="apply-content">
    <div class="container">
      <div class="row">
        <div class="col-md-4">

          <?php 
          if(is_page(107)) {
          	get_template_part('template-parts/content-menu', 'about');
          } else {
          	get_template_part('template-parts/content-menu', 'apply');
          }

          ?>
        </div>
        <div class="col-md-8">
          <div class="apply-info">
            <section class="about-us">
              <div class="container">
                <?php the_content(); ?>  
              </div>
            </section>
          </div><!-- /apply-info -->
        </div>
      </div>
    </div><!-- /apply-content -->
  </section>
  <section class="pdf-form">
    <div class="container">
      <div class="pdf-icon"></div>
      <div class="pdf-content">
        <h1 class="text-center">Download Detail &amp; well document <span>PDF</span> form</h1>
        <div class="row"><a class="btn btn-default download-now">Download Now</a></div>
      </div>
    </div><!-- /container -->
  </section><!-- /pdf-form -->
<?php 
}
get_footer(); ?>