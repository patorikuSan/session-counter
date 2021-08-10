<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		*{
			font-family: 'Helvetica';
		}
		h1{
			margin-left: 40px;
			width: 200px;
		}
		h3{
			color: blue;
			margin-left: 50px;
		}
		span{
			color: red;
			font-weight: bold;
		}


	</style>
	<title>Counter</title>
</head>
<body>
<h1>Hit Counter</h1>
	<?php 
		if($this->session->userdata('boknoy_counter')){ 	?>

		<h3>number of current hits <span><?php echo $this->session->userdata('boknoy_counter'); ?></span></h3>
	<?php 	} else {
			echo 0;
		}
		
	?>
	
</body>
</html>