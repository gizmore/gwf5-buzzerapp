<?php $navbar instanceof GWF_Navbar; ?>
<?php
if ($navbar->isTop())
{
	$navbar->addField(GDO_Link::make('link_buzz')->href(href('Buzzerapp', 'Home')));
}
?>
