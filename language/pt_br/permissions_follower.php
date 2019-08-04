<?php
/** 
* permissions_follower.php [Brazilian Portuguese [pt_br]]
* @package cBB Follower
* @version v2.0.0 01/07/2019
* Brazilian Portuguese  translation by eunaumtenhoid [2019][ver 2.0.0] (https://github.com/phpBBTraducoes)
* @copyright (c) 2019 CaniDev
* @license https://opensource.org/licenses/gpl-license.php GNU Public License
*/

// DO NOT CHANGE
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACL_CAT_FOLLOWER'			=> 'Follower',
	
	'ACL_U_FWR_FOLLOW'			=> 'Pode seguir usuários',
	'ACL_U_FWR_INTERACTION'		=> 'Pode compartilhar e avaliar comentários e mensagens',
	'ACL_U_FWR_MANAGE'			=> 'Pode editar/excluir os comentários do seu mural',
	'ACL_U_FWR_MENTION'			=> 'Pode mencionar usuários',
	'ACL_U_FWR_PUBLISH'			=> 'Pode postar comentários no seu mural',
	
	'ACL_M_FOLLOWER_MANAGE'		=> 'Pode editar/excluir comentários',
));
