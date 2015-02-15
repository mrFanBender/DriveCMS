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
			<div class="header">
				<h1>Logo</h1>
				<?php echo  isset($generalmodules['header']) ? implode($generalmodules['header']) : '';?>
			</div>
			<div class="left">
				<?php echo  isset($generalmodules['left']) ? implode($generalmodules['left']) : '';?>
			</div>
			<div class="content">
				<?php echo $content; ?>
			</div>
			<div class="right">
				<?php echo  isset($generalmodules['right']) ? implode($generalmodules['right']) : '';?>
			</div>
			<div class="clearing"></div>
			<div class="footer">
				All rights reserved
				<?php echo  isset($generalmodules['footer']) ? implode($generalmodules['footer']) : '';?>
			</div>
		</div>
	</body>
</html>