<?php
require 'top.inc.php';
isAdmin();
$title = '';
$description = '';
$type = 0;
$msg = '';
$bannername = '';
if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = get_safe_value($con, $_GET['id']);
    $res = mysqli_query($con, "select * from blog_event_clubs where id='$id'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $row = mysqli_fetch_assoc($res);
        $title = $row['title'];
        $description = $row['description'];
        $type = $row['type'];
        $bannername = $row['image'];
    } else {
        header('location:categories.php');
        die();
    }
}

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $type = $_POST['type'];

    if (isset($_FILES['image'])) {
        $banner = $_FILES['image']['name'];
        $expbanner = explode('.', $banner);
        $bannerexptype = $expbanner[1];
        date_default_timezone_set('Australia/Melbourne');
        $date = date('m/d/Yh:i:sa', time());
        $rand = rand(10000, 99999);
        $encname = $date . $rand;
        $bannername = md5($encname) . '.' . $bannerexptype;
        $bannerpath = "uploads/" . $bannername;
        move_uploaded_file($_FILES["image"]["tmp_name"], $bannerpath);
    }

    if ($msg == '') {
        if (isset($_GET['id']) && $_GET['id'] != '') {

            mysqli_query($con, "update blog_event_clubs set title='$title',description='$description', image='$bannername' ,type='$type'  where id='$id'");
        } else {
            mysqli_query($con, "insert into blog_event_clubs(title,description,image,type) values('$title','$description','$bannername','$type')");
        }
        header('location:categories.php');
    }
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>FORM</strong> </div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="title" class=" form-control-label">Title</label>
									<input type="text" name="title" placeholder="ENTER TITLE" class="form-control" required value="<?php echo $title ?>">
								</div>

								<div class="form-group">
									<label for="title" class=" form-control-label">Image</label>
									<input type="file" name="image" class="form-control">
								</div>

								<div class="form-group">
									<label for="title" class=" form-control-label">Description</label>
									<textarea cols="10" wrap=physical name="description" placeholder="ENTER DESCRIPTION" class="form-control" required>
									<?php echo $description ?>
									</textarea>
								</div>

								<div class="form-group">
									<label for="title" class=" form-control-label">Type</label><br>
									<div class="custom-control custom-radio custom-control-inline">
  										<input type="radio" class="custom-control-input" id="defaultInline1" name="type" value="0" <?php echo $type == 0 ? 'checked' : '' ?> >
  										<label class="custom-control-label" for="defaultInline1">News</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" class="custom-control-input" id="defaultInline2" name="type" value="1" <?php echo $type == 1 ? 'checked' : '' ?> >
									  <label class="custom-control-label" for="defaultInline2">Events</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" class="custom-control-input" id="defaultInline3" name="type" value="2" <?php echo $type == 2 ? 'checked' : '' ?> >
									  <label class="custom-control-label" for="defaultInline3">Clubs</label>
									</div>

								</div>



							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">SUBMIT</span>
							   </button>
							   <div class="field_error"><?php echo $msg ?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>

<?php
require 'footer.inc.php';
?>