<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Generator</title>

	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- fontawesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

	<!-- JS, Popper.js, and jQuery - Bootstrap-->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<!-- Ajax -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	

</head>
<body>

	<!-- Project Modal -->
	<div class="modal fade" id="project_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"> Projects</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div id="view_projects" class="m-3">
					<ul class="list-group">
						<li class="list-group-item text-center active">
							<div><h6 style="font-size: ;" class="pl-3 d-inline">Existed Projects</h6>
							</div>
						</li>

						<?php


						$JSON_data = file_get_contents("JSON/projects.json");
						$array = json_decode($JSON_data,true);

						for($i=0; $i<count($array); $i++) {

							echo '<list href="index.php?folder='.$array[$i]['title'].'" class="list-group-item list-group-item-action d-flex justify-content-between">
							
							<div>'.$array[$i]['title'].'</div>
							<div class="">
							<a href="Projects/'.$array[$i]['title'].'" target="_blank">
							<i class="fas fa-eye text-primary"></i>
							</a>
							<a href="index.php?folder='.$array[$i]['title'].'" target="_blank">
							<i class="fas fa-edit text-success ml-3"></i>
							</a>
							<a href="delete_project.php?folder='.$array[$i]['title'].'&action=delete">
							<i class="fas fa-trash text-danger ml-3"></i>
							</a>
							</div>

							</list>';
						}

						?>
					</ul>
				</div>
				<form method="post" action="add_project.php"><hr class="mx-3">
					<h6 class="mx-3 text-center text-primary">Create New Project</h6>
					<div class="modal-body">
						<input type="text" name="project_name" id="project_name" class="form-control" placeholder="Project Name" required="">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary px-3" data-dismiss="modal">Close</button>
						<button type="submit" id="add_category" class="btn btn-primary px-3">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Category Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<?php

				$folder = '';

				if(isset($_GET['folder'])) {

					$folder = $_GET['folder'];
				}

				?>
				<form method="post" action="add_category.php?folder=<?php echo $folder; ?>">
					<div class="modal-body">
						<input type="text" name="cat_name" id="cat_name" class="form-control" placeholder="Category Name" required=""><br>
						<div class="d-flex justify-content-between">
							<input type="text" name="cat_icon" id="cat_icon" class="form-control mr-4" placeholder="Icon Name" required="">
							<button class="btn btn-light border" style="" id="icon">Icon</button>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary px-3" data-dismiss="modal">Close</button>
						<button type="submit" id="add_category" class="btn btn-primary px-3">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="">
		<div class="jumbotron jumbotron-fluid py-4">
			<div class="container py-0 my-0 d-flex justify-content-between">
				<h3>
					<a href="index.php" class="text-success text-decoration-none">Dashboard Generator</a>
				</h3>
				<!-- <div style="font-size: 22px;" class="text-success">Bhakthi Vidhan</div> -->
				<!-- <form class="row">
					<input type="text" name="project" class="form-control d-inline col-8 mr-3" placeholder="Project Name">
					<button class="btn btn-success d-inline col">Export</button>
				</form> -->
				<?php

				if(isset($_GET['folder'])) {

					echo '<a href="Projects/'.$_GET['folder'].'/index.php" target="_blank" style="font-size: 22px;" class="text-success">'.$_GET['folder'].'</a>';
				}

				?>
			</div>
		</div>

		<div class="row container-fluid mb-3">

			<div class="col-md-3">

				<ul class="list-group text-white" id="categories">
					<li class="list-group-item bg-dark">
						<div id="new_category">
							<i class="fas fa-plus bg-success rounded-circle shadow p-3 text-white"></i> <span style="font-size: 23px;" class="text-success pl-3 d-inline">Add Category</span>
						</div>
					</li>

					<?php 

					$data = file_get_contents("Projects/".$_GET['folder']."/sidebar_links.json");

					$arr = json_decode($data, true);
					for ($i = 0; $i < count($arr); $i++) {

              	// echo $arr[$i]['category'];

						?>
						<li class="list-group-item bg-dark">
							<?php echo $arr[$i]['icon'].$arr[$i]['category']; ?>
						</li>

						<?php

					}

					?>
				</ul>
			</div>

			<div class="col-9 d-flex justify-content-center align-items-center">

				<div class="" style="transform: translateY(-50%); top: 50%; position: fixed;">
					<h2 class="text-center">Create Links</h2><br><br>

					<div class="">
						<form method="post" action="add_category.php?folder=<?php echo $_GET['folder']; ?>">
							<div class="row">
								<div class="col-4">
									<label for="">Link Name</label>
									<input type="text" name="link_name" class="form-control" placeholder="Link Name" required="">
								</div>
								<div class="col-4">
									<div class="d-flex justify-content-around">
										<div>
											<input type="radio" name="link" value="The_Page_Link" checked="" id="for_page_link"> Page Link
										</div>
										<div>
											<input type="radio" name="link" value="HREF" id="for_HREF_link"> HREF
										</div>
									</div>

									<input type="text" name="link_href" class="form-control mt-2" placeholder="Page Link" id="page_link">

									<input type="text" name="Href" class="form-control mt-2" placeholder="Href Link" id="HREF_link">
								</div>
								<div class="col-4">
									<label for="">Category</label>
									<select class="form-control" required="" name="category">
										<?php
										for ($k = 0; $k < count($arr); $k++) {
											echo '<option value="' . $arr[$k]["category"] . '">'.$arr[$k]["category"] . '</option>';
										}

										?>
									</select>
								</div>
							</div><br><br>
							<div class="text-center">
								<button type="submit" class="btn btn-success shadow px-4"><i class="fas fa-plus pr-3"></i> Add New</button>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>

	<script type="text/javascript">
		
		$(document).ready(function() {

			$('#cat_icon').on('keyup', function() {

				var icon = $('#cat_icon').val();
				$('#icon').html(icon);

			});

			url = new URL(window.location.href);

			if (url.searchParams.get('folder')) {

				$('#project_modal').modal('hide');

			}
			else {
				$('#project_modal').modal('show');
			}


			$('.nav-icon').addClass('pr-2');

			$('#new_category').click(function(){

				$('#exampleModal').modal('show');
			});

			function change_to_href() {

				// alert();
			}


				// if($('#for_page_link').is(':checked')) {

				// 	$("#page_link").addClass('d-block');

				// }
				// else if($('#for_HREF_link').is(':checked')){
				// 	alert();

				// 	$("#HREF_link").addClass('d-block');

				// }

				$("#HREF_link").hide();
				$("#page_link").hide();

				$('input[name="link"]').on('change', function() {

					if ($(this).is(':checked') && $(this).val() == 'The_Page_Link') {

						$("#HREF_link").hide();
						$("#page_link").show();

					}

					else if ($(this).is(':checked') && $(this).val() == 'HREF') {

						$("#HREF_link").show();
						$("#page_link").hide();
					}

					// $('.business-fields').toggle(+this.value === 2 && this.checked);
				}).change();

			});

		</script>

	</body>
	</html>