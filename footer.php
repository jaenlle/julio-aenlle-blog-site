      <footer class="row">
        <div class="twelve columns">

            <div class="row"> <!-- this div houses the menu -->
                <div class="twelve columns">
                    <?php wp_nav_menu( array(
                            'sort_column'     =>  'menu_order',
                            'container_class' =>  'blank-menu-header'
                        )); ?>
                </div>
            </div>

            <!--<div id="footernav">
                <ul>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>-->
            <p class="copyright">
                &copy; Julio Aenlle. All Rights Reserved.
            </p>
        </div>

          <!--<div class="four columns" class="foot">
              <?php dynamic_sidebar('footer-one'); ?>
          </div>

          <div class="four columns">
              <?php dynamic_sidebar('footer-two'); ?>
          </div>

          <div class="four columns">
              <?php dynamic_sidebar('footer-three'); ?>
          </div>-->
      </footer>

  </div><!-- this is the end of the container div -->

  <?php wp_footer(); ?> <!-- last thing you put before the body end tag -->

  </body>
</html>
