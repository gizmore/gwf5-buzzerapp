<?php
final class Buzzerapp_Home extends GWF_Method
{
	public function execute()
	{
		if (GWF_User::current()->isAuthenticated())
		{
			return $this->templatePHP('home.php');
		}
		else
		{
			return $this->templatePHP('about.php');
		}
	}
	
	
}