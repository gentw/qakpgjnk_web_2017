        <footer>          
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="logo-wrap">
                    <a href="#"><img src="<?php echo get_theme_file_uri('img/logo.png'); ?>" alt="logo" width="200"></a>
                  </div>
                  <p>Qendra për Arsim dhe Këshillim Profesional “Gjon Nikollë Kazazi” (QAKP GJNK) është një shkollë me partneritet publiko – private, jo- fitimprurëse që shërben mbi 400 nxënës për shkollimin e mesëm prej klasës së 10-të deri në 12-të në Gjakovë, Kosovë. </p>
                </div><!-- /col-md-3 -->
              
                <div class="col-lg-3 col-md-6 twitter-latest-news">
                  <h4>Lajmet e fundit</h4>
                  <ul>
                    <li><span class="user">@qakpgjnk</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc  semper </li>
                    <li><span class="user">@qakpgjnk</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc  semper </li>
                    <li><span class="user">@qakpgjnk</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc  semper </li>
                    <li><span class="user">@qakpgjnk</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc  semper </li>
                  </ul>
                </div><!-- /col-md-3 -->

                <div class="col-lg-3 col-md-6">
                  <h4>Kontakti i shpejtë</h4>
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control" name="full-name" placeholder="Full name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="message" placeholder="Message..."></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" name="submit" value="Send" class="btn btn-primary float-right">
                    </div>
                  </form>
                </div><!-- /col-md-3 -->

                <div class="col-lg-3 col-md-6">
                  <h4>Publikimet e fundit</h4>
                  <ul class="recent-posts">
                    <?php
                      $gjnkPosts = new WP_Query (array(
                        'posts_per_page' => 3,
                      ));

                      while($gjnkPosts->have_posts()) {
                        $gjnkPosts->the_post();
                    ?>

                    <li>
                      <div class="row">
                        <div class="post-left">
                          <?php 
                            $thumbUrl = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                          ?>
                          <a href="#"><div style="width: 57px; height: 54px; background-size: 57px 54px; background:url('<?php echo esc_url($thumbUrl) ?>'); ?>"></div></a>
                        </div>
                        <div class="post-right">
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                      </div>
                    </li>
                    <?php } ?>
                    
                  </ul>
                </div><!-- /col-md-3 -->
              </div>
            </div>
          </div> <!-- /footer-top -->

          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <p>Të gjitha të drejtat e rezervuara - 2017
                  </p>
                </div>
                <div class="col-md-6 col-sm-6">   
                  <ul class="icon-effect icon-effect-1a">
                    <li><a href="#" class="icon"><i class="fa fa-facebook first"></i></a></li>
                    <li><a href="#" class="icon"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icon"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#" class="icon"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://bitemybytes.com" alt="Zhvilluar nga BITEMYBYTES"><img alt="bitemybytes" width="30" src="<?php echo get_theme_file_uri('img/bmb.png'); ?>"></a></li>
                  </ul>
                </div>
              </div><!-- /row -->
            </div>
          </div>

        </footer>

        <?php wp_footer(); ?>
    </body>
</html>

