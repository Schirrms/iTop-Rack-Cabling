<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2019 Schirrms
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here
	'Class:GenericCommLayer1Interface/Attribute:cable_id' => 'Cable Label',
	'Class:GenericCommLayer1Interface/Attribute:cable_name' => 'Cable Label Name',
	'Class:PatchPanel' => 'Patch Panel',
	'Class:PatchPanel/Attribute:patchpanelport_list' => 'Ports on this panel',
	'Class:PatchCable' => 'Patch Cable',
	'Class:PatchCable/Attribute:patchcablecolor_id' => 'Main Patch Cable Color',
	'Class:PatchCable/Attribute:physcommtype_a_id' => 'Connector type on side A',
	'Class:PatchCable/Attribute:physcommtype_a_name' => 'Connector type on side A name',
	'Class:PatchCable/Attribute:remote_a_id' => '\'A\' side connected to',
	'Class:PatchCable/Attribute:remote_a_id_finalclass_recall' => 'Equipment type on \'A\' side',
	'Class:PatchCable/Attribute:remote_a_name' => '\'A\' side connected to name',
	'Class:PatchCable/Attribute:physcommtype_b_id' => 'Connector type on side B',
	'Class:PatchCable/Attribute:physcommtype_b_name' => 'Connector type on side B name',
	'Class:PatchCable/Attribute:remote_b_id' => '\'B\' side connected to',
	'Class:PatchCable/Attribute:remote_b_id_finalclass_recall' => 'Equipment type on \'B\' side',
	'Class:PatchCable/Attribute:remote_b_name' => '\'B\' side connected to name',
	'Class:PatchCable/Attribute:length' => 'Cable length',
	'Class:PatchCable/Attribute:straight-crossed' => 'Straight or Crossed Cable',
	'Class:PatchCable/Attribute:straight-crossed/Value:straight' => 'Straight',
	'Class:PatchCable/Attribute:straight-crossed/Value:crossed' => 'Crossed',
	'Class:PatchPanelPort' => 'Patch Panel Port',
	'Class:PatchPanelPort/Attribute:connectableci_id' => 'Patch Panel this port belongs',
	'Class:PatchPanelPort/Attribute:connectableci_name' => 'Name of Patch Panel this port belongs',
	'Class:PatchPanelPort/Attribute:remotebackpanelport_id' => 'Connected to Remote Patch Panel Port',
	'Class:PatchPanelPort/Attribute:remotebackpanelport_name' => 'Connected to Remote Patch Panel Port Name',
	'Class:PatchPanelPort/Attribute:physcommtype_id' => 'Connector type',
	'Class:PatchPanelPort/Attribute:physcommtype_name' => 'Connector Type Name',
));
?>
