<?php
final class Buzzerapp_SortButton extends GWF_MethodSort
{
	public function gdoSortObjects() { return BUZ_Button::table(); }
	
	public function canSort(GDO $gdo)
	{
		$gdo instanceof BUZ_Button;
		return $gdo->getUserID() === GWF_User::current()->getID();
	}
	
}
