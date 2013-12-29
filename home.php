<table>
	<thead>
		<tr>
			<th>s_id</th>
            <th>s_name</th>
            <th>s_address</th>
            <th>s_contact</th>
            <th colspan="2">Actions</th>
   		</tr>
	</thead>
    <tbody>
	<?php 
		foreach ($row as $val){
	?>
    	<tr>
        	<td style="text-align:center;"><?php echo $val['s_id'];?></td>
            <td><?php echo $val['s_name'];?></td>
            <td><?php echo $val['s_address'];?></td>
            <td><?php echo $val['s_contact'];?></td>
            <td width="10%" style="text-align:center;">
           		<a href= "index.php?page=new&id=<?php echo $val['s_id'];?>" style="font-family:'Times New Roman', Times, serif; font-size:15px; font-weight:bold;">Edit</a>
         	</td>
            <td width="10%">
            	<a href= "index.php?page=delete&id=<?php echo $val['s_id'];?>" style="font-family:'Times New Roman', Times, serif; font-size:15px; font-weight:bold;">Delete</a>
        	</td>
      	</tr>
  	<?php } ?>
    </tbody>
    <tfoot>
    	<tr>
        	<td colspan="6" style="color:#06C; text-align:center; font-size:14px;">Total number of rows (data inserted) = <?php echo $ct; ?></td>
        </tr>
    </tfoot>
</table>
<h3>tbl_company:</h3>
<table><!--table for company-->
	<thead>
    	<tr>
        	<th>comp_id</th>
            <th>comp_name</th>
            <th>comp_address</th>
            <th>comp_contact</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
    	<tr>
        	<td></td>
            <td></td>
            <td></td>
            <td></td>
            <td width="10%" style="text-align:center;">
           		<a href= "index.php?page=new&id=<?php echo $val['s_id'];?>" style="font-family:'Times New Roman', Times, serif; font-size:15px; font-weight:bold;">Edit</a>
         	</td>
            <td width="10%">
            	<a href= "index.php?page=delete&id=<?php echo $val['s_id'];?>" style="font-family:'Times New Roman', Times, serif; font-size:15px; font-weight:bold;">Delete</a>
        	</td>
        </tr>
    </tbody>
</table><!--comany table ends here--><br />
<a href="#" class="buttons" >Add new record in tbl_company</a>