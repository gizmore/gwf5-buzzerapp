<?php
final class Buzzerapp_AddSample extends GWF_MethodForm
{
	public function execute()
	{
		$response = parent::execute();
		$tabs = Module_Buzzerapp::instance()->onRenderTabs();
		return $tabs->add($response);
	}
	
	public function createForm(GWF_Form $form)
	{
		$gdo = BUZ_Sample::table();
		$form->addFields(array(
			$gdo->gdoColumn('sample_file'),
			GDO_Submit::make(),
			GDO_AntiCSRF::make(),
		));
	}
	
	public function formValidated(GWF_Form $form)
	{
		$sample = BUZ_Sample::blank($form->values())->insert();
		$button = BUZ_Button::blank()->setVar('button_sample', $sample->getID())->insert();
		GDO_AudioIcon::make()->file($button->getSample()->getFile())->generatePNG();
		return $this->message('msg_buzz_uploaded');
	}
}
