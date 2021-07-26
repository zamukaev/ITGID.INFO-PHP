<?php
/**
 * main page template 
 */
require_once 'header.php';
$out ='';
for($i = 0; $i < count($result); $i++){
	$out .='<div>';
	$out .='<h3>'.$result[$i]['title'].'</h3>';
	$out .='<p>'.$result[$i]['descr_min'].'</p>';
	$out .='<img src="/static/images/'.$result[$i]['image'].'" width=300>';
	$out .= '<div><a class="pure-button pure-button-primary" href="/article/'.$result[$i]['url'].'">Подробнее</a></div>';
	$out .='</div><hr>';
}
?>


<div class="content pure-u-1 pure-u-md-3-4">
		<?php echo $out; ?>
		<?php require_once 'footer.php'; ?>
		</div>
</div>
</div><!-- layout end -->