<?php
	require ('dbconn.php'); //include ('dbconn.php')
	$sql="SELECT * FROM tbl_student";
	$res=mysql_query($sql);
	$row = array();
	
	while($r = mysql_fetch_array($res)){
		$row[] = $r;
	}
	//count the number of rows in table
	$c=mysql_query("SELECT count(1) from tbl_student");
	$cr= mysql_fetch_array($c);
	$ct=$cr[0];
	
	$sql="SELECT * FROM menu";
	$res=mysql_query($sql);
	$data=array();
	while ($r=mysql_fetch_array($res)){
		$data[]=$r;
	}
	//print_r($data);
	
	$sql="SELECT * FROM tbl_company";
	$res=mysql_query($sql);
	$inf= array();
	while ($s=mysql_fetch_array($res)){
		
	}
?>
<?php include_once('includes/header.php'); ?>

		<?php 
		if(@$_GET['msg']){ //show div class notify only if get 'msg'
					?>
		<div class="notify">
        	<p>
            		<?php
							if(@$_GET['msg']==1){
								echo "New Student Record Added Successfully";
							}
							else if($_GET['msg']==2){
								echo "All rows have been deleted";
							}
							else if(@$_GET['msg']==3){
								echo "Your record updated successfully.";
							}
							else if($_GET['msg']==4){
								echo "Row deleted successfully";
							}
					?>
            </p>
           <!-- <span>
            	X
            </span>-->
        </div>
<?php } ?>
		<?php 
				if(@$_GET['page']){
					include $_GET['page'].'.php';
				}
				else{
					include 'home.php';
				}
		?>
<?php include_once('includes/footer.php'); ?>
        
