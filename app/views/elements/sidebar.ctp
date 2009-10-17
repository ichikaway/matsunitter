<h3>最近検索されたキーワード(Top10)</h3>
<ol>
<?php
  $recents = $this->requestAction("/recent");
  foreach($recents as $recent) :
?>
  <li><?php echo $html->link($recent["History"]["name"], array("controller"=>"search", "?"=>array("q"=>$recent["History"]["name"]))); ?></li>
<?php endforeach;?>
</ol>
<h3>人気のキーワード(Top10)</h3>
<ol>
<?php
  $populars = $this->requestAction("/popular");
  foreach($populars as $popular) :
?>
  <li><?php echo $html->link($popular["History"]["name"], array("controller"=>"search", "?"=>array("q"=>$popular["History"]["name"]))); ?></li>
<?php endforeach;?>
</ol>