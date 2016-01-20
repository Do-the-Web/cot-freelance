<?php

/**
 * [BEGIN_COT_EXT]
 * Hooks=users.main
 * Order=99
 * [END_COT_EXT]
 */
/**
 * plugin User Group Selector for Cotonti Siena
 * 
 * @package usergroupselector
 * @version 1.0.0
 * @author CMSWorks Team
 * @copyright Copyright (c) CMSWorks.ru, littledev.ru
 * @license BSD
 *  */
defined('COT_CODE') or die('Wrong URL.');

if($cfg['plugin']['flevents']['ordersperpage'] > 0)
{
	list($pn, $d, $d_url) = cot_import_pagenav('d', $cfg['plugin']['flevents']['ordersperpage']);
}
