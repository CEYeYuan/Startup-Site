<!DOCTYPE HTML>
<HTML>
	<head>
		<link rel='stylesheet' href='<?php echo base_url(); ?>assets/stylesheets/navbar.css' type='text/css' />
		<link type='text/css' rel='stylesheet' href='<?php echo base_url()?>assets/stylesheets/general.css' />
		<script type="../views/text/javascript" src="js/jquery-2.1.3.js"></script>
		<title>Share Your Ideas</title>

	</head>
	
	<header>
		<!-- Include the header -->
		<?php $this->load->view('menubar'); ?>
	</header>

	
	<body>

		<div>
			<form action='<?php echo base_url();?>/index.php/Ideas/share_ideas' method="post">
				<?php echo validation_errors();?>
				<p>Title:
					<input type="text" name="title" size="30" /> 
				</p>

				<p>Market:
					<input type="radio" name="market" value="health" checked="checked"/> health
					<input type="radio" name="market" value="technology" /> technology  
					<input type="radio" name="market" value="education" /> education
					<input type="radio" name="market" value="finance" /> finance
					<input type="radio" name="market" value="travel" /> travel
				</p>

				<p>Description:</p>
				<p>
					<textarea name="description" rows="6" cols="40"></textarea>	
				</p>	
				
				<p>Keywords(seprated by white space):</p>
				<p>
					<input type="text" name="keywords" size="35"/> 
				</p>	

				<p>
					<input type="submit" />
		
				</p>	
				

				
			</form>	
			
		</div>
		
				
				
	</body>
</HTML>