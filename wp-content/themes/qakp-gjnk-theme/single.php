<?php get_header(); ?>


  <section class="details-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="right-news">
          
          <?php
          	while(have_posts()) {
          		the_post();
          ?>

            <div class="news-image">
              <div class="d-block w-100" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large') ?>);"></div>
              <div class="calendar-news">
                <h1 class="text-center"><?php the_time('j'); ?><br><span><?php echo changeMonthLangToAL(); ?></span></h1>
              </div><!-- /calendar-image -->
            </div><!-- news/image -->
            <div class="heading-news">
              <h2><?php
              	the_title();
               ?></h2>
              
              <!--
              <div class="w3-panel quotes-news">
                <span >❝</span>
                <p class="w3-xlarge">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tempor non lorem non euismod. Suspendisse porttitor neque id vestibulum tempus</p>
              </div> /quotes-news -->
             <p><?php the_content(); ?></p>
            </div><!-- /heading-news -->
            <?php } ?>
          </div><!-- /col-sm-9 -->
        </div><!-- /row -->
        <div class="col-sm-3">
          <div class="left-news">
            <div class="search-news">
              <form action="">
                <h4>Kerko:</h4>
                <input type="text" name="search" placeholder="Kerko...">
              </form>
            </div><!-- /serch-new -->
            <!--
            <div class="popular-courses">
              <h4>Populer Courses</h4>
              <ul>
                <hr>
                <li>Graphic Design</li>
                <hr>
                <li>Graphic Design</li>
                <hr>
                <li>Graphic Design</li>
                <hr>
                <li>Graphic Design</li>
              </ul>
            </div>-->
            <div class="recent-post">
              <h4>Të Fundit</h4>
              
              <div class="owl-carousel owl-theme">
                  <ul>
                    <?php 
                      $gjnkRecentPosts = new WP_Query(array(
                        'posts_per_page' => 3,
                        'orderby' => 'id',
                        'order' => 'DESC'  
                      ));
                      $actualPost = get_the_ID();
                      //echo $postID;
                      while($gjnkRecentPosts->have_posts()) {
                        $gjnkRecentPosts->the_post();
                        
                        if(get_the_ID() !== $actualPost) {
                          
                    ?>
                    <li class="recent-list">
                      <a href="<?php the_permalink(); ?>">
                        <div class="image-li" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>); background-position: center center;"></div>
                        <div class="text-li"><?php the_title() ?> <span>23 Aug, 2017</span></div>  
                      </a>
                    </li> 

                    <?php
                        }
                    }
                    ?>
                                       
                  </ul>
              </div>

            </div><!-- /resent-post -->
            
            <div class="video-news">
              <iframe class="video" width="270" height="215" src="https://www.youtube.com/embed/Tpn9pmHYII0?autohide=1&showinfo=0&controls=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
            </div><!-- /video-news -->
            <div class="table-news">
              <h4>Categories</h4>
              <table class="table">
                <tbody>
                  <tr>
                    <td>Mark</td>
                    <td>15</td>
                  </tr>
                  <tr>
                    <td>Jacob</td>
                    <td>10</td>
                  </tr>
                  <tr>
                    <td>Larry</td>
                    <td>9</td>
                  </tr>
                  <tr>
                    <td>Larry</td>
                    <td>9</td>
                  </tr>
                  <tr>
                    <td>Larry</td>
                    <td>9</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- /table-news -->
          </div><!-- /left-news -->
        </div><!-- /col-sm-3 -->
      </div><!-- /row -->
    </div><!-- /container -->
  </section><!-- /details-bar -->   
<?php get_footer(); ?>