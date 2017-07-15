<?php
final class Buzzerapp_Audio extends GWF_Method
{
	public function execute()
	{
		$buttonId = Common::getRequestString('button');
		$button = BUZ_Button::findById($buttonId);
		$fileId = $button->getSample()->getFileID();
		return method('GWF', 'GetFile')->executeWithId($fileId);
	}
}
