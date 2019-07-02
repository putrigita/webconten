    <footer class="footer">
      <div class="container">
          <nav class="pull-left">
              <ul>
                <li>
                <a style="color:#3c8dbc;" rel="tooltip" <?php if(!isSet($_GET['lang']) || $_GET['lang']=='en'){echo'title="Follow me on Twitter"';}else{echo'title="Follow saya di Twitter"';} ?> data-placement="top" href="https://twitter.com/<?php echo $info[7]['info_content']; ?>" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
               <li>
                <a style="color:#3c8dbc;" rel="tooltip" <?php if(!isSet($_GET['lang']) || $_GET['lang']=='en'){echo'title="Follow me on Instagram"';}else{echo'title="Follow saya di Instagram"';} ?> data-placement="top" href="https://www.instagram.com/<?php echo $info[8]['info_content']; ?>" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
              <li>
                <a style="color:#3c8dbc;" rel="tooltip" <?php if(!isSet($_GET['lang']) || $_GET['lang']=='en'){echo'title="See me on Facebook"';}else{echo'title="Lihat saya di Facebook"';} ?> data-placement="top" href="https://www.facebook.com/<?php echo $info[6]['info_content']; ?>" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                  <i class="fa fa-facebook-square"></i>
                </a>
              </li>
              <li>
                <a style="color:#3c8dbc;" rel="tooltip" <?php if(!isSet($_GET['lang']) || $_GET['lang']=='en'){echo'title="See me on LinkedIn"';}else{echo'title="Lihat saya di LinkedIn"';} ?> data-placement="top" href="https://www.linkedin.com/in/<?php echo $info[5]['info_content']; ?>/" target="_blank" class="btn btn-white btn-simple btn-just-icon">
                  <i class="fa fa-linkedin-square"></i>
                </a>
              </li>
              </ul>
          </nav>
          <div class="copyright pull-right">
              Copyright &copy; 2017 Gita</strong> All rights reserved.
          </div>
      </div>
  </footer>