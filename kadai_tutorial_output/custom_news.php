<?php get_header(); ?>

    <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <div>News</div>
            <div>ニュース</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Post 部分 -->
    <div class="course">
      <div class="row content-body">
        <!-- Course -->
        <div class="col-lg-8">
          <!-- Course Tabs -->
          <div class="course_tabs_container">
            <div class="tab_panels">
              <!-- Description -->
              <div class="tab_panel">
                <div class="tab_panel_title">ニュース</div>
                <div class="tab_panel_content">
                  <div class="tab_panel_text">
                    <div class="news_posts_small">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sx-12">
                          <div class="calendar_news_border">
                            <div class="calendar_news_border_1">
                              <div class="calendar_month">JUne</div>
                              <div class="calendar_day">
                                <span>07</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sx-12">
                          <div class="news_post_small_header">
                            <img src="images/tags-solid.png" alt="" /> NEWS
                          </div>
                          <div class="news_detail_title">
                            卒業式
                          </div>
                          <div class="news_post_meta">
                            キャンバスの講堂にて卒業式があります。今年はSoftGeekの創業者が公演に来てくださいます。企業家のお話が聞けますので、ふるってご参加ください。
                          </div>

                          <hr />
                          <div class="social_share">
                            <img src="images/facebook-square-brands.png" alt="" />
                            <img src="images/twitter-square-brands.png" alt="" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--  Sidebar -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>

      <?php get_footer(); ?>