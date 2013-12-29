<?php
@$id = $_GET['id'];
$sql = "select * from tbl_student where s_id='$id'";
$res = mysql_query($sql);
$data = mysql_fetch_assoc($res);
require 'update.php';
?>
<br>
<form method="post" action="index.php?page=update&id=<?php echo $data['s_id']; ?>">
<p>
	<label>Student ID: </label><strong><?php echo $data['s_id']; ?></strong>
</p>
<p>
<label>Name:</label>
<input type="text" id="name" name="name" value="<?php echo $data['s_name']?>" style="width:200px;">
</p>
<p>
<label>Address:</label>
<input type="text" id="address" name="address" value="<?php echo $data['s_address']?>" style="width:250px;">
</p>
<p>
<label>Contact No.:</label>
<input type="tel" id="contact" name="contact" value="<?php echo $data['s_contact']?>">
</p>
<p>
<input type="submit" value="Save" class="buttons" style="border:none; height:25px;">
<a href="index.php" class="buttons">Cancel</a>
</p>
</form>