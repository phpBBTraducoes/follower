<?php
/** 
* common.php [Brazilian Portuguese [pt_br]]
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
	'COMMENT_ADD'			=> 'Novo comentário',

	'ADD_PHOTOS'			=> 'Adicionar imagens',
	'COMMENTS'				=> 'Comentários',
	'COPY_COMMENT_LINK'		=> 'Copiar link do comentário',
	'EDIT'					=> 'Editar',
	'FOLLOW'				=> 'Seguir',
	'FOLLOWING'				=> 'Seguindo',
	'FOLLOWING_BY'			=> 'Seguido por %s',
	'FOLLOWER'				=> 'Seguidor do usuário',
	'FOLLOWERS'				=> 'Seguidores',
	'FWR_HOME'				=> 'Cronologia',
	'LIKE'					=> 'Curtir',
	'LIKE_UNDO'				=> 'Não Curtir',
	'LOAD_MORE'				=> 'Carregar mais',
	'MENTIONS'				=> 'Menções',
	'MENTION_USER'			=> 'Mencionar usuário',
	'NO_COMMENT'			=> 'O comentário selecionado não existe',
	'NO_ITEMS'				=> 'Nenhum elemento para mostrar',
	'NO_RESULTS'			=> 'Nenhum resultado',
	'PUBLISH'				=> 'Publicar',
	'RECENT_ACTIVITY'		=> 'Atividade recente',
	'REPLY'					=> 'Responder',
	'RESULTS_OF'			=> '<strong>Resultados de:</strong> <em>%s</em>',
	'RESULTS_USER'			=> '<strong>Usuários:</strong> <em>%s</em>',
	'SAVE'					=> 'Salvar',
	'SEARCH_RESULTS'		=> 'Procurar Resultados',
	'SHARE'					=> 'Compartilhar',
	'SHARE_UNDO'			=> 'Não compartilhar',
	'SHARED_BY'				=> 'Compartilhado por %s',
	'TITLE_FOLLOWING'		=> 'Pessoas que seguem %s',
	'TITLE_FOLLOWERS'		=> 'Pessoas que seguem %s',
	'TITLE_POSTS'			=> 'Posts postados por %s',
	'TITLE_TOPICS'			=> 'Tópicos postados por %s',
	'TITLE_WALL'			=> 'Mural de %s',
	'TRENDS'				=> 'Trends',
	'UNFOLLOW'				=> 'Não seguir',
	'UNSHARE'				=> 'Não Compartilhar',
	'USER_INFO'				=> 'Sobre %s',
	'USER_WALL'				=> 'Mural do usuario',
	'USUAL_POSTER'			=> 'Postador frequente',
	'VIEW_ALL'				=> 'Ver tudo',
	'VIEW_COMMENT_RESULTS'	=> 'Veja os resultados dos comentários',
	'VISITED'				=> 'Última visita',
	'WALL'					=> 'Mural',
	'WALL_IN_REPLY'			=> 'Em resposta a &uarr;',
	'WALL_REPLIES'			=> 'Respostas &darr;',
	'WHO_FOLLOW'			=> 'Quem segue',
	'YEARS_OLD'				=> 'anos',

	'EMPTY_MY_HOME'			=> 'Aqui você verá a atividade das pessoas que você está seguindo.',
	'EMPTY_MY_FOLLOWERS'	=> 'Aqui as pessoas que seguem você serão exibidas.',
	'EMPTY_MY_FOLLOWING'	=> 'Aqui você verá as pessoas que você segue.',
	'EMPTY_MY_MENTIONS'		=> 'Aqui você verá os comentários ou mensagens em que seu nome é mencionado.',
	'EMPTY_MY_POSTS'		=> 'Aqui você verá as mensagens postadas no fórum.',
	'EMPTY_MY_TOPICS'		=> 'Aqui você verá os tópicos criados no fórum.',
	'EMPTY_MY_WALL'			=> 'Este é o seu mural pessoal<br />Aqui seus comentários serão exibidos.',

	'EMPTY_OTHER_FOLLOWERS'	=> 'Ninguém segue %s ainda.',
	'EMPTY_OTHER_FOLLOWING'	=> '%s ainda não segue ninguém.',
	'EMPTY_OTHER_POSTS'		=> '%s ainda não escreveu nenhuma mensagem.',
	'EMPTY_OTHER_TOPICS'	=> '% s ainda não criou nenhum tópico.',
	'EMPTY_OTHER_WALL'		=> '% s ainda não compartilhou nada.',
	
	'LINK_CLIPBOARD_ERROR'		=> 'O link não pôde ser copiado',
	'LINK_CLIPBOARD_SUCCESS'	=> 'Link copiado para a área de transferência',

	'POST_ROW'			=> '<span style="font-weight:bold;font-size:0.9em;">Post:</span> <a href="%1$s">%2$s</a><br /><span class="row-small">%3$s</span>',
	'TOPIC_ROW'			=> '<span style="font-weight:bold;font-size:0.9em;">Tópico:</span> <a href="%1$s">%2$s</a><br /><span class="row-small"> &raquo; Em <a href="%3$s">%4$s</a></span>',
	
	// Notifications
	'FW_NOTIFICATION_FOLLOW'			=> '%s começou a seguir você',
	'FW_NOTIFICATION_MENTION_COMMENT'	=> '%s mencionou você em uma mensagem no mural dele',
	'FW_NOTIFICATION_MENTION_POST'		=> '%s mencionou você no tópico:',
	
	'FW_NOTIFICATION_LIKE_COMMENT'	=> array(
		1	=> '%s curtiu um comentário no seu mural',
		2	=> '%s curtiu um comentário no seu mural',
	),
	
	'FW_NOTIFICATION_LIKE_POST'		=> array(
		1	=> '%s curtiu uma mensagem que você postou',
		2	=> '%s curtiu uma mensagem que você postou',
	),

	'FW_NOTIFICATION_REPLY'		=> '%s respondeu a um comentário no seu mural',
	
	'FW_NOTIFICATION_SHARE'			=> array(
		1	=> '%s compartilhou um comentário no seu mural',
		2	=> '%s compartilhou um comentário no seu mural',
	),

	'SUBSCRIPTION_REMOVED'				=> 'A assinatura foi removida com sucesso.',
	
	// Install
	'EXT_INSTALL_ERROR'		=> 'Esta extensão não é compatível com alguma extensão instalada.<br />Verifique a documentação para obter mais informações.',
	'CORE_INSTALL_ERROR'	=> 'Você não enviou todos os arquivos do pacote de instalação ou está tentando instalar um pacote antigo.<br />
        Por favor, certifique-se de enviar todos os arquivos (incluindo a pasta <em>core</em>) e use um pacote baixado do site oficial.',
));
