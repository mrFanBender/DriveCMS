<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $title ?></title>
		<meta name="description" content="<?php echo $description ?>"/>
		<?php foreach($styles as $style): ?>
			<?php echo HTML::style("public/css/".$style.".css"); ?>
		<?php endforeach; ?>
	</head>
	<body>
		<div class="container">
			<div class="header"><h1>Logo</h1></div>
			<div class="left">
				<h3>Menu</h3>
				<br/>
				<ul>
					<li><a href="<?php echo URL::site(); ?>">Main</a></li>
					<li><a href="<?php echo URL::site('/articles'); ?>">Articles</a></li> 
					<li><a href="<?php echo URL::site('/about'); ?>">About</a></li>
					<li><a href="<?php echo URL::site('/contacts'); ?>">Contacts</a></li>
				</ul>
			</div>
			<div class="content">
				<?php echo $content ?>
			</div>
			<div class="clearing"></div>
			<div class="footer">All rights reserved</div>
		</div>
	</body>
</html>