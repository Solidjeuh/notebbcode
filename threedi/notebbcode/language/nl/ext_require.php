<?php
/**
*
* @package phpBB Extension - notebbcode
* @copyright (c) 2016, 2017 3Di (Marco T.)
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/


if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ERROR_MSG_3111_321_MISTMATCH'	=>	'Minimaal 3.1.11 maar minder dan 3.2.0@dev. OF groter dan 3.2.1 maar minder dan 3.3.0@dev.',
));
