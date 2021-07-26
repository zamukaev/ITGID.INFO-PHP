<?php
require_once 'config/db.php';
require_once 'core/function_db.php';
require_once 'core/function.php';

$conn = connect();//*подключаем базу данных



$route = $_GET['route'];//* глобалная перемненная Гет
$route = explodeURL($route);//* разбиваем Гет строку на массив

//* переключатель роут / старт стр
switch ($route) {
		case ($route[0] == ''):
			$query = 'select * from info';
			$result = select($query);
			require_once 'template/main.php';
			break;

//* артикл стр
		case ($route[0] == 'article' AND isset($route[1])):
			$url = $route[1];
			$result = getArticle($url);
			if($result == false){
				require_once 'template/404.php';
			}
			else{
				require_once 'template/article.php';
			}
			
			break;
//*стр категорий
		case ($route[0] == 'cat' AND isset($route[1])):
			$cat = getCategory($route[1]); 
			$result = getCategoryArticle($cat['id']);
			require_once 'template/cat.php';
			break;
//*стр всех категорий 
		case ($route[0] == 'cat'):
			$cat = getAllCategory($cat);
			require_once 'template/allcat.php';
			break;
//*стр регистр
		case ($route[0] == 'register'):
			require_once 'template/register.php';
			break;
//*стр логин
		case ($route[0] == 'login'):
			require_once 'template/login.php';
			break;
//*стр удаление стат	
		case ($route[0] == 'admin' AND $route[1] === 'delete' AND isset($route[2])):
			if(getUser()){
				$query ="DELETE FROM info WHERE id=".$route[2];
				execQuery($query);
				header("Location: /admin");
				exit;
			}
			header("Location: /");
			break;
//*стр добавление стат	
		case ($route[0] == 'admin' AND $route[1] === 'create'):
			if(getUser()){
				$query = "SELECT id, title FROM category";
				$category = select($query);
				require_once 'template/create.php';
			}
			break;

		case ($route[0] == 'admin' AND $route[1] === 'update' AND  isset($route[2]) ):
			if(getUser()){
				$query = "SELECT id, title FROM category";
				$category = select($query);
				$query = "SELECT * FROM info where id=".$route[2];
				$result = select($query)[0];
				if($result == false){
					require_once 'template/404.php';
				}
				else{
					require_once 'template/update.php';
				}
			}
			break;
//*стр админ	
		case ($route[0] == 'admin'):
			$query = 'SELECT * FROM info';
			$result = select($query);
			require_once 'template/admin.php';
			break;
		case ($route[0] == 'logout'):
			$query = 'SELECT * FROM info';
			$result = select($query);
			require_once 'template/logout.php';
			break;

		default:
			require_once 'template/404.php';
}





