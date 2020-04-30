<?php
if(isset($_GET['page'])){
	$page = $_GET['page'];
	switch ($page) {
		case 'update_data':
		include 'v_update.php';
		break;
	}
}

else{
	include "v_data.php";
}

?>