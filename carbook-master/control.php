<?php
class control
{
	function __construct()
	{
		$path=$_SERVER['PATH_INFO']; //http://localhost/Project/admin/control.php	
		switch($path)
		{
			case '/index':
			include_once('index.php');
			break;
	
			case '/about':
			include_once('about.php');
			break;
			
			case '/services':
			include_once('services.php');
			break;
			
			case '/pricing':
			include_once('pricing.php');
			break;
			
			case '/car':
			include_once('car.php');
			break;
			
			case '/blog':
			include_once('blog.php');
			break;
			
			case '/contact':
			include_once('contact.php');
			break;
			
			
			
			case '/manage_user':
			include_once('manage_user.php');
			break;
			
			case '/manage_contact':
			include_once('manage_contact.php');
			break;
			case '/manageCar_ Adv':
				include_once('manageCar_ Adv.php');
				break;

			case '/view_booking':
			include_once('view_booking.php');
			break;

			case '/view_review':
			include_once('view_review.php');
			break;
			
			default:
			echo "<h1>Page Not Found</h1>";
			break;
		}
	}	
}
$obj=new control;
?>