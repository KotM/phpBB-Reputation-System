<?php
/**
*
* @package	Reputation System
* @author	Pico88 (Pico) (http://www.modsteam.tk), Versusnja
* @copyright (c) 2012
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

// Adding new category
$lang['permission_cat']['reputation'] = 'Репутация';

// Adding the permissions
$lang = array_merge($lang, array(
	'acl_a_reputation'			=> array('lang' => 'Может упралвять оценками', 'cat' => 'misc'),
	'acl_m_rs_give'				=> array('lang' => 'Может давать дополнительные оценки', 'cat' => 'reputation'),
	'acl_m_rs_moderate'			=> array('lang' => 'Может модерировать оценки', 'cat' => 'reputation'),
	'acl_u_rs_delete'			=> array('lang' => 'Может удалять свои оценки', 'cat' => 'reputation'),
	'acl_u_rs_give'				=> array('lang' => 'Может давать оценки пользователям', 'cat' => 'reputation'),
	'acl_u_rs_give_negative'	=> array('lang' => 'Может давать негативные оценки пользователям', 'cat' => 'reputation'),
	'acl_u_rs_ratepost'			=> array('lang' => 'Может оценивать сообщения вообще', 'cat' => 'reputation'),
	'acl_u_rs_view'				=> array('lang' => 'Модет просматривать подробности репутации', 'cat' => 'reputation'),
	'acl_f_rs_give'				=> array('lang' => 'Может оценивать сообщения', 'cat' => 'reputation'),
	'acl_f_rs_give_negative'	=> array('lang' => 'Может давать негативные оценки', 'cat' => 'reputation'),
));

?>