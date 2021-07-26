<?php
/***
 * article page template
 */
require_once 'header.php';
$out ='';
	$out .='<div>';
	$out .='<h3>'.$result['title'].'</h3>';
	$out .='<p>'.$result['descr_min'].'</p>';
	$out .='<img src="/static/images/'.$result['image'].'" >';
	$out .='<p>'.$result['description'].'</p>';
	$out .='</div>';
?>
<div class="content pure-u-1 pure-u-md-3-4">
    <?php echo $out; ?>
    <a class="pure-button pure-button-primary" href="/">Назад</a>
    <?php require_once 'footer.php'; ?>
</div>
</div>
</div><!-- layout end -->