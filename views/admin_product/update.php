<?php include ROOT.'/views/layouts/header_admin.php';?>




<div class="container">
  
  <section class="panel panel-default">
<div class="panel-heading"> 
<h3 class="panel-title">Update product</h3> 
</div> 
<div class="panel-body">


<form action="#" method="post">


   <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Product name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="name" value="<?php echo $product['name']; ?>">
    </div>
  </div> <!-- form-group // -->

  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Code</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="code" id="name" placeholder="" value="<?php echo $product['code']; ?>">
    </div>
  </div> <!-- form-group // -->

  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Price</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="price" id="name" placeholder="" value="<?php echo $product['price']; ?>">
    </div>
  </div> <!-- form-group // -->

  <div class="form-group">
    <label for="tech" class="col-sm-3 control-label">Category</label>
    <div class="col-sm-3">
   <select name = "category_id"class="form-control">

   <?php if(!empty($categoriesList)): ?>
       <?php foreach($categoriesList as $category): ?>
         <option value="<?php echo $category['id'];?>"  <?php if($product['category_id'] == $category['id']){
            echo 'selected';
            }?>>
         <?php echo $category['name'];?>
         </option>
       <?php endforeach; ?> 
   <?php endif; ?>

   </select>
    </div>
  </div> <!-- form-group // -->

  <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Brand</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="brand" id="name" placeholder="" value="<?php echo $product['brand']; ?>">
    </div>
  </div> <!-- form-group // -->

  <div class="col-sm-3">
      <label class="col-sm-3 control-label" for="image">Image (jpg/png):</label>
      <img src="<?php echo Product::getImage($id);?>" width="200"/>
       <input type="file" name="image" value="<?php echo $product['image'] ?>">
    </div>

    <div class="form-group">
                    <label for="pDesc">Product Description</label>
                    <textarea type="pDesc" class="form-control" id="pDesc" name="description" ><?php echo $product['description']; ?></textarea>
    </div> <!-- form-group // -->

    <div class="form-group">
    <label for="tech" class="col-sm-3 control-label">Product availability</label>
    <div class="col-sm-3">
   <select name="availability" class="form-control" >
	
	<option value="1" <?php if($product['availability'] == 1){echo 'selected="selected"';};?>>Yes</option>
	<option value="0"  <?php if($product['availability'] == 0){
            echo 'selected';
            }?>>No </option>
   </select>
    </div>
  </div> <!-- form-group // -->

  <div class="form-group">
    <label for="tech" class="col-sm-3 control-label">Is new?</label>
    <div class="col-sm-3">
   <select name="is_new" class="form-control">
	
	<option value="1"  <?php if($product['is_new'] == 1){
            echo 'selected';
            }?>>Yes</option>
	<option value="0"  <?php if($product['is_new'] == 0){
            echo 'selected';
            }?>>No </option>
   </select>
    </div>
  </div> <!-- form-group // -->

  <div class="form-group">
    <label for="tech" class="col-sm-3 control-label">Is reccomended?</label>
    <div class="col-sm-3">
   <select name="is_recommended" class="form-control">
	
	<option value="1"  <?php if($product['is_recommended'] == 1){
            echo 'selected';
            }?>>Yes</option>
	<option value="0"  <?php if($product['is_recommended'] == 0){
            echo 'selected';
            }?>>No </option>
   </select>
    </div>
  </div> <!-- form-group // -->

  <div class="form-group">
    <label for="tech" class="col-sm-3 control-label">Status</label>
    <div class="col-sm-3">
   <select name="status" class="form-control">
	
	<option value="1"  <?php if($product['status'] == 1){
            echo 'selected';
            }?>>Displayed</option>
	<option value="0"  <?php if($product['status'] == 0){
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


<?php include ROOT.'/views/layouts/header_admin.php';?>