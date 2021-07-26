<?php
/**
 * cat page template
 */
require_once 'header.php';
	$out ='';
	$out .='<div>';
	$out .='<h3>Категория '.$cat['title'].'</h3>';
	$out .='<p>'.$cat['description'].'</p>';
	$out .='</div>';
	?>
	<div class="content pure-u-1 pure-u-md-3-4">
    <?php echo $out; ?>
   
    <?php require_once 'footer.php'; ?>
</div>
</div>
</div><!-- layout end -->

<?php

$out ='';
for($i = 0; $i < count($result); $i++){
	$out .='<div>';
	$out .='<h3> '.$result[$i]['title'].'</h3>';
	$out .='<p>'.$result[$i]['descr_min'].'</p>';
	$out .='<img src="/static/images/'.$result[$i]['image'].'" width=200>';
	$out .= '<div><a class="pure-button pure-button-primary" href="/article/'.$result[$i]['url'].'">Подробнее</a></div>';
	$out .='</div>';
}

?>
<div class="content pure-u-1 pure-u-md-3-4">
    <?php echo $out; ?>
<br><a class="pure-button pure-button-primary" href="/cat">Назад</a>
    <?php require_once 'footer.php'; ?>
</div>
</div>
</div><!-- layout end -->


