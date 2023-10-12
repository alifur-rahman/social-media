<?php
require('top.inc.php');
isAdmin();
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	
	
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from blog_event_clubs where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from blog_event_clubs order by id asc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Blog, event & clubs  </h4>
				   <a href="manage_categories.php" class="btn btn-success" style="float: right;">ADD Blog, event & clubs</a>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>TITLE</th>
							   <th>IMAGE</th>
							   <th>DESCRIPTION</th>
							   <th>TYPE</th>
							   <th>Action</th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['title']?></td>
							   <td><img src="uploads/<?php echo $row['image']; ?>" width="300px"></td>
							   <td><?php echo $row['description']?></td>
							   <td><?php 
							 		if($row['type']==0)
									 echo 'News';
									else if($row['type']==1)
									 echo 'Events';
									else
									 echo 'Clubs';	
							   ?></td>
							   <td>
								<?php
								echo "<span class='badge badge-edit'><a href='manage_categories.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
								
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>