<?php Themewrangler::setup_page();get_header(/***Template Name: Homepage */); ?>

<div id="home--wrapper">

  <?php $mainWidth = 'fs-lg-10'; ?>

  <section id="home--can" class="scroll-header">
    <div class="fs-row">
      <div class="fs-cell <?php echo $mainWidth; ?> fs-md-6 fs-sm-3 fs-centered">
        <div class="fs-row">
          <div id="home--can_info"   class="fs-cell fs-lg-8 fs-md-4 fs-sm-3 fs-right">
            <nav id="home--can_nav">
              <a class="btn btn-link btn-first hide" href="#home--can"><?php the_field('intro--headline'); ?></a>
              <a class="btn btn-link btn-first" href="#home--can">The Can</a>
              <a class="btn btn-link" href="#home--about">Mission</a>
              <a class="btn btn-link" href="#home--videos">Videos</a>
              <a class="btn btn-link" href="#home--story">The Story</a>
              <a class="btn btn-link" href="#home--social">#warriorscan</a>
              <a class="btn btn-link" href="#home--gallery">Gallery</a>
              <div class="right">
                <a class="btn btn-link ss-social-circle ss-facebook"  href="#"></a>
                <a class="btn btn-link ss-social-circle ss-twitter"   href="#"></a>
                <a class="btn btn-link ss-social-circle ss-instagram" href="#"></a>
              </div>
            </nav>
            <header id="home--can_title">
              <h1><?php the_field('intro--headline'); ?></h1>
              <h3><?php the_field('intro--sub-headline'); ?></h3>
              <?php the_field('intro--teaser'); ?>
              <a class="navigate-icon" href="#home--about"><i class="ss-gizmo ss-icon">navigatedown</i></a>
              <hr class="vertical-nav-line" />
            </header>
          </div><!-- Home Can Info -->
          <div id="home--can_spinner" class="fs-cell fs-lg-3 fs-md-2 fs-sm-3">
            <?php include locate_template('parts/home/can.php'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="home--about">
    <div class="fs-row">
      <div class="fs-cell <?php echo $mainWidth; ?> fs-md-6 fs-sm-3 fs-centered">
        <div id="home--about_wrapper" class="fs-row">
          <div id="home--about_info"   class="fs-cell fs-lg-8 fs-md-6 fs-sm-3 fs-right sized">
            <header id="home--about_title">
              <hr class="vertical-nav-line" />
              <h5 class="section-title"><span>Mission</span></h5>
            </header>
            <div class="section-content">
              <?php the_field('mission'); ?>
            </div>
          </div><!-- Home Can Info -->
          <div id="home--view-gallery" class="fs-cell fs-lg-4 fs-md-6 fs-sm-3s sized">
            <a href="#home--gallery" class="ss-glyphish ss-plus">View the Gallery</a>
          </div>
          <div id="home--about_bg"></div>
        </div><!-- Row -->
      </div>
    </div>
  </section>

  <?php

    // Might be useful for videos
    // http://sourcey.com/youtube-html5-embed-from-url-with-php/

  ?>

  <section id="home--videos">
    <div class="fs-row">
      <div class="fs-cell <?php echo $mainWidth; ?> fs-md-6 fs-sm-3 fs-centered">
        <div class="fs-row">
          <div id="home--videos_info"   class="fs-cell fs-lg-8 fs-md-6 fs-sm-3 fs-right">
            <header id="home--videos_title">
              <hr class="vertical-nav-line" />
              <h5 class="section-title"><span>Videos</span></h5>
              <?php the_field('videos_description'); ?>
            </header>
          </div><!-- Home Videos Info -->
        </div>
        <div id="home--video_content" class="fs-row">
          <?php include locate_template('parts/home/videos.php'); ?>
        </div>
      </div>
    </div>
  </section>

  <section id="home--story">
    <div class="fs-row">
      <div class="fs-cell <?php echo $mainWidth; ?> fs-md-6 fs-sm-3 fs-centered">
        <div class="fs-row">
          <div id="home--story_info"   class="fs-cell fs-lg-8 fs-md-6 fs-sm-3 fs-right">
            <header id="home--story_title">
              <hr class="vertical-nav-line" />
              <h5 class="section-title"><span>Story</span></h5>
            </header>
          </div><!-- Home Story Info -->
          <hr class="invisible">
          <div id="home--story_content" class="fs-cell section-content fs-lg-8 fs-md-6 fs-sm-3 fs-right">
            <?php the_field('projectstory'); ?>
          </div>
          <aside class="fs-cell fs-lg-3 fs-md-hide fs-sm-3">
            <hr class="invisible">
            <hr class="invisible">
            <hr class="invisible">
            <hr class="invisible">
            <hr class="invisible">
            <hr class="invisible">
            <figure>
              <img src="/assets/img/warriorsbg.jpg" class="img-responsive" />
              <figcaption>
                Sed ac libero tincidunt, dapibus sem ut, volutpat sapien. Quisque at
                varius ipsum. Aenean vitae massa id dolor ullamcorper viverra eu ac
                libero. Sed malesuada mollis semper.
              </figcaption>
            </figure>
          </aside>

        </div>
      </div>
    </div>
  </section>

  <section id="home--social">
    <div class="fs-row">
      <div class="fs-cell <?php echo $mainWidth; ?> fs-md-6 fs-sm-3 fs-centered">
        <div class="fs-row">
          <div id="home--social_info"   class="fs-cell fs-lg-8 fs-md-6 fs-sm-3 fs-right">
            <header id="home--social_title">
              <hr class="vertical-nav-line" />
              <h5 class="section-title">
                <span>#warriorscan</span>
                <menu id="social--slider" class="right">
                  <a class="btn-left"><i class="ss-gizmo ss-icon">navigateleft</i></a>
                  <a class="btn-right"><i class="ss-gizmo ss-icon">navigateright</i></a>
                </menu>
              </h5>
              <p><?php the_field('videos_description'); ?></p>
            </header>
          </div><!-- Home Can Info -->
          <div id="home--social_content" class="fs-cell fs-lg-12 fs-md-6 fs-sm-3">

              <div id="tw-carousel-1" dir="rtl" class="fs-cell fs-lg-6 fs-md-6 fs-sm-3 fs-contained">
                <?php include locate_template('parts/home/social_tw-1.php' ); ?>
              </div>

              <div id="ig-carousel-1" dir="rtl" class="fs-cell fs-lg-6 fs-md-6 fs-sm-3 fs-contained">
                <?php include locate_template('parts/home/social_ig-1.php' ); ?>
              </div>

              <div class="clearfix"></div>

              <div id="ig-carousel-2" dir="rtl" class="fs-cell fs-lg-6 fs-md-6 fs-sm-3 fs-contained">
                <?php include locate_template('parts/home/social_ig-2.php' ); ?>
              </div>

              <div id="tw-carousel-2" class="fs-cell fs-lg-6 fs-md-6 fs-sm-3 fs-contained">
                <?php include locate_template('parts/home/social_tw-2.php' ); ?>
              </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="home--gallery" class="static">
    <div class="fs-row">
      <div class="fs-cell <?php echo $mainWidth; ?> fs-md-6 fs-sm-3 fs-centered">
        <div class="fs-row">
          <div id="home--gallery_info"   class="fs-cell fs-lg-8 fs-md-6 fs-sm-3 fs-right">
            <header id="home--gallery_title">
              <hr class="vertical-nav-line" />
              <h5 class="section-title"><span>Gallery</span></h5>
              <p><?php the_field('gallery_description'); ?></p>
            </header>
          </div><!-- Home Can Info -->
        </div>
      </div>
    </div>
  </section>

  <section id="actual--gallery" class="fs-grid fs-grid-fluid">
    <div class="fs-row nomargin">
      <?php include locate_template('parts/home/gallery.php' ); ?>
    </div>
  </section>

</div>

<?php // Leave this stuff alone ?>

<div id="spinner--overlay">
  <a id="spinner--overlay_close" class="right"><i class="ss-gizmo ss-icon">plus</i></a>
  <div class="fs-grid">
    <div class="fs-row">
      <div class="fs-cell <?php echo $mainWidth; ?> fs-centered">
        <div class="fs-row">
          <div class="fs-cell fs-lg-8 fs-md-6 fs-sm-3 fs-right">
            <?php include locate_template('/parts/home/tabs.php'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>