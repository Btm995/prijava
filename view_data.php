
<!DOCTYPE html>
<html>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
</style>
<body>
<div id="container">
	<div class="con2">
    <?php
		$con=mysqli_connect("localhost","root","","data");
		
		if (is_numeric($_GET['o']))
		{
			$o=$_GET['o'];
		}else {
			$o=0;
			}
			
		if ($o >=1){
			$prev=$o-1;
			} else{
				$prev=0;
			}
		
		
		$query=mysqli_query($con,"SELECT * FROM data LIMIT $o, 1");
		$get_pic=mysqli_fetch_assoc($query);
		
		$query2=mysqli_query($con,"SELECT id FROM data");
		$get_pic2=mysqli_fetch_assoc($query2);
		$total=mysqli_num_rows($query2);
		
		if ($o <=$total){$next=$o+1;}
		
	?>
    <?php do { ?>
    <table align="center" width="300" border=".5" bordercolor="#0B615E">
		<tr> <td colspan="2" align="center"><?php echo '<img src="upload/' . $get_pic['filename'] . '" width="200" height="200"> '; ?></td></tr>
		<tr><td width="60"> Name: </td> <td align="left" bordercolor="#0B615E"> <?php echo $get_pic['fname']; ?>  &nbsp
		<?php echo $get_pic['mname'];?>  &nbsp
		<?php echo $get_pic['lname'];?> </td></tr>
		<tr><td width="60"> Age:</td> <td align="left"><?php echo $get_pic['age']; ?></td></tr>
		<tr><td width="60"> Address: </td> <td align="left"><?php echo $get_pic['address']; ?></td></tr>
    <tr><td colspan="2" align="center">	
    <?php
	} while ($get_pic=mysqli_fetch_assoc($query));
	?>
    <?php if ($o>0){ ?>
    <span><a href="view_data.php?o=<?php echo $prev; ?>">Previous</a></span> 
    <?php } ?>
    <?php if ($o < ($total - 1)){ ?>
    <span><a href="view_data.php?o=<?php echo $next; ?>">Next</a></span>
	<?php } ?>
	
    <?php
		mysqli_close($con);
	?>
    </td><tr>
    <tr><td colspan="2"> &nbsp </td></tr>
    <tr><td colspan="2" align="center"><a href="form_upload.php"> Back to Data Entry </td></tr>
    </table>
    </div>
    
  <div class="footer"> Copyright © sourcecodester.com</div>
</div>
</body>
</html>
