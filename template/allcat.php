<?php
/**
 * allcat page template
 */
require_once 'header.php';

for($i = 0; $i < count($cat); $i++){
	$out .='<div>';
	$out .='<h3>Категория: '.$cat[$i]['title'].'</h3>';
	$out .='<p>'.$cat[$i]['description'].'</p>';
	$out .= '<div><a  class="pure-button pure-button-primary" href="/cat/'.$cat[$i]['url'].'">Перейтик категории</a></div>';
	$out .='</div><hr>';


}

?>

<div class="content pure-u-1 pure-u-md-3-4">
    <?php echo $out;?>

    <?php require_once 'footer.php'; ?>
<br> <div><a  class="pure-button pure-button-primary" href="/">Назад</a></div>
</div>

</div>

</div><!-- layout end -->