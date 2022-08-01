<?php include ROOT.'/views/layouts/header_admin.php';?>




<div class="container">
  
  <section class="panel panel-default">
<div class="panel-heading"> 
<h3 class="panel-title">Update order</h3> 
</div> 
<div class="panel-body">


<form action="#" method="post">


   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">User name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="user_name" value="<?php echo $orderById['user_name']; ?>">
    </div>
  </div> <!-- form-group // -->

  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">User phone</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="user_phone" id="name" placeholder="" value="<?php echo $orderById['user_phone']; ?>">
    </div>
  </div> <!-- form-group // -->

  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">User comment</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="user_comment" id="name" placeholder="" value="<?php echo $orderById['user_comment']; ?>">
    </div>
  </div> <!-- form-group // -->

  
  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Date</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="date" id="name" placeholder="" value="<?php echo $orderById['date']; ?>">
    </div>
  </div> <!-- form-group // -->



    <div class="form-group">
    <label for="tech" class="col-sm-3 control-label">Status</label>
    <div class="col-sm-3">
   <select name="status" class="form-control">
	
	<option value="1"  <?php if($orderById['status'] == 1){
            echo 'selected';
            }?>>Displayed</option>
	<option value="0"  <?php if($orderById['status'] == 0){
            echo 'selected';
            }?>>No </option>
   </select>
    </div>
  </div> <!-- form-group // -->
  <br>

  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <input type="submit" name="submit" class="btn btn-defaul" value="Update">
    </div>
  </div> <!-- form-group // -->
</form>
  
</div><!-- panel-body // -->
</section><!-- panel// -->

  
</div> <!-- container// -->
<br>






<?php include ROOT.'/views/layouts/footer_admin.php';?>