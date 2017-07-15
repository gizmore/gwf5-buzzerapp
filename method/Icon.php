<?php
final class Buzzerapp_Icon extends GWF_Method
{
	public function execute()
	{
		$buttonId = Common::getRequestString('button');
		$button = BUZ_Button::findById($buttonId);
		$file = $button->getSample()->getFile();
		$icon = GDO_AudioIcon::make()->file($file)->generatePNG();
		$path = $icon->tempPathFile('.png');
		header('Content-Type: image/png');
		header('Content-Size: '.filesize($path));
		GWF_Stream::path($path);
	}
}