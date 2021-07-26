<?php
/**
 * update page template
 */

$action ='Update';
if(isset($_POST['submit'])){
	$title = trim($_POST['title']);
	$url = trim($_POST['url']);
	$descr_min = trim($_POST['descr_min']);
	$description = trim($_POST['description']);
	$cid = $_POST['cid'];

	if (isset($_FILES['image']['tmp_name']) AND $_FILES['image']['tmp_name'] !== ''){
		move_uploaded_file($_FILES['image']['tmp_name'], 'static/images/'.$_FILES['image']['name']);
		$image = $_FILES['image']['name'];
	}
	else {
		$image = $result['image'];
	}

	
	$id = $route[2];
	$update = updateArticle($id, $title, $url, $descr_min, $description, $cid, $image);

	if($update){
		setcookie("alert", "update ok", time()+60*1);
		header('location: '.$_SERVER['REQUEST_URI']);
	}
	else{
		setcookie("alert", "update error", time()+60*1);
		header('location: '.$_SERVER['REQUEST_URI']);

	}
	

}

if(isset($_COOKIE['alert'])){
		$alert = $_COOKIE['alert'];
		setcookie("alert", "", time()-60*1);
		unset($_COOKIE['alert']);
		
		}

		require_once 'header_admin.php';
?>

<div class="content pure-u-1 pure-u-md-3-4">
    <h1>Update</h1>
	
    <?php
    require_once '_form.php';
    echo $alert;
    require_once 'footer.php';
    ?>
</div>








