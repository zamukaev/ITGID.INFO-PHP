<?php
/**
 * admin page template
 */
if(!getUser()){
	header("Location: /login");
}
$out ='';
for($i = 0; $i < count($result); $i++){
	$out .='<div>';
	$out .='<p>'.$result[$i]['title'].'</p>';
	$out .='<img src="/static/images/'.$result[$i]['image'].'" width=100>';
	$out .= '<div><a  class="pure-button pure-button-primary" href="/admin/delete/'.$result[$i]['id'].'" onclick="return confirm(\'Точно???\')">Удалить</a></div><br>';
	$out .= '<div><a class="pure-button pure-button-primary" href="/admin/update/'.$result[$i]['id'].'" onclick="return confirm(\'Точно???\')">Обновить</a></div>';
	$out .='</div>';
	
}

require_once 'header_admin.php';
?>
<div class="content pure-u-1 pure-u-md-3-4">
    <h1>Admin panel</h1>
    <?php
    echo $out;
    ?>
    <?php require_once 'footer.php'; ?>
</div>
</div>
</div><!-- layout end -->