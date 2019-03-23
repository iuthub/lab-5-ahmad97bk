<?php 

	if(isset($_POST['section']))
		$section = $_POST['section'];
	else
		$error=True;
	if(isset($_POST['Name']))
		$name = $_POST['Name'];
	else
		$error=True;
	if(isset($_POST['card']))
		$card = $_POST['card'];
	else
		$error=True;
	if(isset($_POST['credit']))
		$credit = $_POST['credit'];
	else
		$error=True;
    if(!$error)
    {$data = $name.";".$section.";".$credit.";".$card."\n";
    file_put_contents('sucker.txt', $data, FILE_APPEND);
    $content = file_get_contents('sucker.txt');}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
	<?php if(!$error){ ?>	
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?= $name ?></dd>

			<dt>Section</dt>
			<dd><?= $section ?></dd>

			<dt>Credit Card</dt>
			<dd><?= $credit ?> ( <?=$card ?> )</dd>
		</dl>
		<pre>
			<?= $content ?>
		</pre>
	<?php }
	else
	{ ?>
       You didn't fill out the form completely. <a href="buyagrade.html">Try again</a>


	<?php } ?>
	</body>
</html>  