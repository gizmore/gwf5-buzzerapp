<?php
final class Buzzerapp_AddButton extends GWF_MethodForm
{
	public function createForm(GWF_Form $form)
	{
		$gdo = BUZ_Button::table();
		$form->addFields(array(
			$gdo->gdoColumn('button_sample'),
			GDO_Submit::make(),
			GDO_AntiCSRF::make(),
		));
	}
}
