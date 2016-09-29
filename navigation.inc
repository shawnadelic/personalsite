      <div class="three columns nav">
        <ul>
        <?php
          echo "<li><a href=\"".$pages->get("/")->url."\" class=\"splash\">Home</a></li>";
          $children = $pages->get("/")->children;
          foreach ($children as $child) {
            echo "<li><a href=\"".$child->url."\" class=\"splash\">".$child->title."</a></li>";
          }
?>
        <li><a href="http://github.com/shawnadelic/">Github</a></li>
        <li><a href="https://www.linkedin.com/in/shawnadelic/">LinkedIn</a></li>
        </ul>
      </div>

