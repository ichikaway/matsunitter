<h3>最近検索されたキーワード(Top10)</h3>
<ol>
<?php
  $recents = $this->requestAction("/recent");
  foreach($recents as $recent) :
?>
  <li><?php echo $html->link($recent["History"]["name"], array("controller"=>"search", "?"=>array("q"=>$recent["History"]["name"]))); ?></li>
<?php endforeach;?>
</ol>