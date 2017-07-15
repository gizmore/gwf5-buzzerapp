<?php
$user = GWF_User::current();
$module = Module_Buzzerapp::instance();
$buttons = BUZ_Button::forUser($user);
$json = array(
	'buttons' => GDO_JSON::make()->convertJSON($buttons),
);

echo $module->onRenderTabs();
?>
<div
 layout="row"
 layout-fill flex
 ng-controller="BUZCtrl"
 ng-keydown="onKeyDown($event)"
 ng-init='initJSON(<?= json_encode($json); ?>)'>
 
 <a
  layout="column"
  class="md-button buzz-img-btn"
  flex="50"
  ng-repeat="button in data.buttons"
  ng-click="play(button)">
   <img class="" ng-src="{{imageUrlForButton(button)}}" />
   <b>F1</b>
 </a>
 <div ng-click="addButton">+</div>
  
</div>
