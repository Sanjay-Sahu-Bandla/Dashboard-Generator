<?php



// delete a project by getting the parameters

if(isset($_GET['folder'])&&isset($_GET['action'])) {

	$project_name = $_GET['folder'];
	
	// delete project details from JSON/projects.json

	$data = file_get_contents("JSON/projects.json");

	$arr = json_decode($data, true);
	for ($i = 0; $i < count($arr); $i++) {

		if($arr[$i]['title'] == $project_name) {

			unset($arr[$i]);
		}
	}

	if(file_put_contents("JSON/projects.json",json_encode($arr,JSON_PRETTY_PRINT))) {

		echo "<script>

		window.location = 'index.php';
		alert('Project deleted successfully');

		</script>";

	}

	// delete entire folder

	function deleteDir($path) {

		return is_file($path) ?
		@unlink($path) :
		array_map(__FUNCTION__, glob($path.'/*')) == @rmdir($path);
	}

	if($_GET['action'] == 'delete') {

		$folder = 'Projects/'.$_GET['folder'];

		deleteDir($folder);
	}
}

?>