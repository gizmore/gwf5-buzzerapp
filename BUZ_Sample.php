<?php
final class BUZ_Sample extends GDO
{
	public function gdoColumns()
	{
		$module = Module_Buzzerapp::instance();
		return array(
			GDO_AutoInc::make('sample_id'),
			GDO_AudioFile::make('sample_file')->notNull()->maxsize($module->cfgMaxSize()),
			GDO_CreatedAt::make('sample_created'),
			GDO_CreatedBy::make('sample_creator'),
			GDO_DeletedAt::make('sample_deleted'),
			GDO_DeletedBy::make('sample_deletor'),
		);
	}
	
	/**
	 * @return GWF_File
	 */
	public function getFile() { return $this->getValue('sample_file'); }
	public function getFileID() { return $this->getVar('sample_file'); }
	
}
