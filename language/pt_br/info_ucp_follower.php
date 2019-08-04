<?php
/** 
* info_ucp_follower.php [Brazilian Portuguese [pt_br]]
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
	'ABOUTME'					=> 'Sobre mim',
	'ABOUTME_EXPLAIN'			=> 'Texto pequeno (máximo de 250 caracteres), visível por outros usuários.',
	'ERROR_ABOUTME_TOO_LONG'	=> 'O campo "Sobre mim" contém mais caracteres do que permitido',
	
	// Notifications
	'NOTIFICATION_GROUP_FOLLOWER'	=> 'Notificações do seguidor do usuário',
	'FW_NOTIFICATION_TYPE_FOLLOW'	=> 'Alguém te segue',
	'FW_NOTIFICATION_TYPE_LIKE'		=> 'Alguém curtiu um comentário ou mensagem sua',
	'FW_NOTIFICATION_TYPE_MENTION'	=> 'Alguém mencionado em um comentário ou mensagem',
	'FW_NOTIFICATION_TYPE_POST'		=> 'Alguém que você segue postar uma mensagem',
	'FW_NOTIFICATION_TYPE_REPLY'	=> 'Alguém responde a um comentário no seu mural',
	'FW_NOTIFICATION_TYPE_SHARE'	=> 'Alguém compartilhou um comentário no seu mural',
	'FW_NOTIFICATION_TYPE_TOPIC'	=> 'Alguém que você segue postando um tópico',
));
