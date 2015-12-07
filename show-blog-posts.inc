<?php
function truncateText($text, $maxlength = 200) {
  // truncate to max length
  $text = substr(strip_tags($text), 0, $maxlength);
  // check if we need to truncate further
  if(strlen(rtrim($text, ' .!?,;')) == $maxlength) {
    // truncate to last word 
    $text = substr($summary, 0, strrpos($summary, ' ')); 
  }
  return trim($text); 
}

$results = $pages->get("/blog/")->children("sort=-publish_date, limit=4");
foreach ($results as $result){
	echo "<div class=\"entry\">";
	echo "<div class=\"entry-title\"><h3><a href=\"".$result->url."\" class=\"splash\">".$result->title."</a></h3>";
	echo "<div class=\"entry-date\">".date('F j, Y',$result->publish_date)."</em></strong></div></div>";
	echo "<div class=\"entry-content\">";
	echo $result->content;
	echo "</div><div class=\"u-cf\"></div>";
	echo "</div>";
}
echo $results->renderPager();
?>
