<?php

$project_name = $_POST['project_name'];

mkdir("Projects/".$project_name);

// copy all files from Assets and paste into Project

$src = 'Assets';
$dst = 'Projects/'.$project_name;

recurse_copy($src,$dst);

function recurse_copy($src,$dst) { 
	$dir = opendir($src); 
	@mkdir($dst); 
	while(false !== ( $file = readdir($dir)) ) { 
		if (( $file != '.' ) && ( $file != '..' )) { 
			if ( is_dir($src . '/' . $file) ) { 
				recurse_copy($src . '/' . $file,$dst . '/' . $file); 
			} 
			else { 
				copy($src . '/' . $file,$dst . '/' . $file); 
			} 
		} 
	} 
	closedir($dir); 
}

// copy files from page and paste into project

recurse_copy('pages','Projects/'.$project_name);

echo "<script>

alert('Project created');

</script>";

// add project details into JSON/projects.json

$JSON_data = file_get_contents("JSON/projects.json");
$array = json_decode($JSON_data,true);

$id = uniqid();

$array[] = array(
	'id'=>$id,
	'title'=>$project_name,
	'path'=>'Projects/'.$project_name
);

if(file_put_contents("JSON/projects.json",json_encode($array,JSON_PRETTY_PRINT))) {

	echo "<script>

	window.location = 'index.php?folder=".$project_name."';

	</script>";
}
else {
	echo "<script>

	alert('Something went wrong');
	window.location = 'index.php';

	</script>";
}
?>