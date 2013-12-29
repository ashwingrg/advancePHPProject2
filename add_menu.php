<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>MG Class, Eg1</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
</head>
<body>
	<div id="container">
		<div id="wrapper">
        <div class="date">Current Date: <?php echo date("D-m-y"); ?></div><br>
        <div id="menu">
        	<?php foreach ($data as $val){ ?>
            <ul>
            	<li><a href="<?php echo $val['m_link']; ?>"><?php echo $val['m_title']; ?></a></li>
            </ul>
            <?php } ?>
        </div><!--menu ends here-->


<?php
	include_oncle('includes/footer.php');
?>