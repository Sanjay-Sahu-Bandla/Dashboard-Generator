<?php

if(isset($_POST['cat_icon'])&&isset($_POST['cat_name'])) {

	$project_name = $_GET['folder'];

	// echo "<script>alert(1)</script>";

	$JSON_data = file_get_contents("Projects/".$project_name."/sidebar_links.json");
	$array = json_decode($JSON_data,true);

	$array[] = array(
		'category'=>$_POST['cat_name'],
		'sub_cat_name'=>[],
		'link'=>[],
		'icon'=>$_POST['cat_icon']

	);

	if(file_put_contents("Projects/".$project_name."/sidebar_links.json",json_encode($array,JSON_PRETTY_PRINT))) {

		echo "<script>

		alert('Updated Successfully');
		window.location = 'index.php?folder=".$project_name."';

		</script>";
	}
	
	else {
		echo "<script>

		alert('Something went wrong');
		window.location = 'index.php?folder=".$project_name."';

		</script>";
	}

}


if(isset($_POST['link_name'])&&(isset($_POST['link_href']) || isset($_POST['Href']))&&isset($_POST['category'])) {

	if(isset($_POST['Href'])) {

		if(!empty($_POST['Href'])) {

		$link = $_POST['Href'];

		}

	}

	if(isset($_POST['link_href'])) {

		if(!empty($_POST['link_href'])) {

			$link = $_POST['link_href'];

			$link_file = $_POST['link_href'];
		}
	}


	$project_name = $_GET['folder'];

	$JSON_data = file_get_contents("Projects/".$project_name."/sidebar_links.json");
	$array = json_decode($JSON_data,true);

	for ($k = 0; $k < count($array); $k++) {

		if($array[$k]['category'] == $_POST['category']) {

			$array[$k]['sub_cat_name'][] = $_POST['link_name'];
			$array[$k]['link'][] = $link;

			if(!empty($_POST['link_href'])) {

				if(!is_file($link_file)) {

					copy("pages/index.php", "Projects/".$project_name."/".$link_file);
				}

				else {

					echo "<script>

					alert('File already exists !');
					window.location = 'index.php?folder=".$project_name."';

					</script>";
				}
			}
		}

		if(file_put_contents("Projects/".$project_name."/sidebar_links.json",json_encode($array,JSON_PRETTY_PRINT))) {

			echo "<script>

			window.location = 'index.php?folder=".$project_name."';
			alert('Updated Successfully');

			</script>";
		}

		else {
			echo "<script>

			window.location = 'index.php?folder=".$project_name."';
			alert('Something went wrong');

			</script>";
		}

	}

}

?>
