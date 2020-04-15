<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>New Page</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<!-- <link rel="stylesheet" href="http://localhost/Carikture/internship/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
	<!-- JQVMap -->
	<!-- <link rel="stylesheet" href="http://localhost/Carikture/internship/plugins/jqvmap/jqvmap.min.css"> -->
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<!-- <link rel="stylesheet" href="http://localhost/Carikture/internship/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
	<!-- Daterange picker -->
	<!-- <link rel="stylesheet" href="http://localhost/Carikture/internship/plugins/daterangepicker/daterangepicker.css"> -->
	<!-- summernote -->
	<!-- <link rel="stylesheet" href="http://localhost/Carikture/internship/plugins/summernote/summernote-bs4.css"> -->
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>

	<?php include 'top_nav.php'; ?>

	<!-- sidebar -->

	<?php include 'sidebar.php'; ?>
	<!-- /.sidebar -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<!-- <script src="http://localhost/Carikture/internship/plugins/chart.js/Chart.min.js"></script> -->
<!-- Sparkline -->
<!-- <script src="http://localhost/Carikture/internship/plugins/sparklines/sparkline.js"></script> -->
<!-- JQVMap -->
<!-- <script src="http://localhost/Carikture/internship/plugins/jqvmap/jquery.vmap.min.js"></script> -->
<!-- <script src="http://localhost/Carikture/internship/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="http://localhost/Carikture/internship/plugins/jquery-knob/jquery.knob.min.js"></script> -->
<!-- daterangepicker -->
<!-- <script src="http://localhost/Carikture/internship/plugins/moment/moment.min.js"></script> -->
<!-- <script src="http://localhost/Carikture/internship/plugins/daterangepicker/daterangepicker.js"></script> -->
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<!-- <script src="http://localhost/Carikture/internship/plugins/summernote/summernote-bs4.min.js"></script> -->
<!-- overlayScrollbars -->
<!-- <script src="http://localhost/Carikture/internship/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="http://localhost/Carikture/internship/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->

<script src="dist/js/demo.js"></script>

<script type="text/javascript">	
		
		$(document).ready(function() {

		$('.nav-icon').addClass('pr-2');

		$('#new_category').click(function(){

			$('#exampleModal').modal('show');
		});

	});

</script>

</body>
</ht