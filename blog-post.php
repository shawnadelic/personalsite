<?php include("header.inc") ?>		
        <div class="entry">
          <span class="entry-title">
            <h2 class="splash"><?php echo $page->title ?></h2>
            <span class="entry-date"><?php echo date('F j, Y',$page->publish_date) ?></span>
          </span>
          <div class="entry-content">
            <?php echo $page->content ?>
          </div>
        </div>


<?php include("footer.inc") ?>		
