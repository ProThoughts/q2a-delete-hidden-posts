<?php


if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

return array(
	/*languages for admin panel*/
	'dhp_enable'                => 'Enable the plugin' ,
	'all_hidden_posts_deleted'  => 'All Hidden posts deleted ' ,
	'same_user_can_delete'      => 'Allow users to delete their own question/answer' ,
	'choose_who_can_delete_all' => 'Minimum Level users who can delete the questions' ,
	'delete_hidden_posts'       => 'Delete Hidden Posts' ,
	'delete_q'                  => 'Delete the Question' ,
	'delete_a'                  => 'Delete the Answer' ,
);

/*
	Omit PHP closing tag to help avoid accidental output
*/