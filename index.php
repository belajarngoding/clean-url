<?php
define(LIB_DIR, './lib/');

require_once(LIB_DIR . 'config.php');
require_once(LIB_DIR . 'function.php');

$type = $_GET['type'];

switch ($type) {
	case 'view':
		$post_id = $_GET['id'];

		$post = get_post_by_id($post_id);
		while ($row = mysql_fetch_object($post))
		{

			// render blog list disini
			$result = '
			<div>
				<h1>'.$row->title.'</h1>
				<p>'.nl2br($row->content).'</p>
				<p><a href="'.$base_url.'">Kembali</a></p>
			</div>
			';
			echo $result;
  		}
		break;
	
	default:
		$posts = get_all_post();

		while ($row = mysql_fetch_object($posts))
		{

			// render blog list disini
			$result = '
			<div>
				<a href="'.$base_url.'view/'.$row->post_id.'"><h1>'.$row->title.'</h1></a>
				<p>'.substr($row->content, 0, 100).'</p>
			</div>
			';
			echo $result;
  		}
		break;
}
?>