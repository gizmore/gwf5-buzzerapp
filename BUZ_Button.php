<?php
final class BUZ_Button extends GDO
{
	public function gdoColumns()
	{
		return array(
			GDO_AutoInc::make('button_id'),
			GDO_Object::make('button_sample')->table(BUZ_Sample::table())->notNull(),
			GDO_Color::make('button_color'),
			GDO_Sort::make('button_sort'),
			GDO_CreatedBy::make('button_user')->notNull(),
		);
	}
	
	/**
	 * @return BUZ_Sample
	 */
	public function getSample() { return $this->getValue('button_sample'); }
	public function getSampleID() { return $this->getVar('button_sample'); }
	
	/**
	 * @param GWF_User $user
	 * @return BUZ_Button[]
	 */
	public static function forUser(GWF_User $user)
	{
		return self::table()->select()->where("button_user={$user->getID()}")->exec()->fetchAllObjects();
	}
	
}
