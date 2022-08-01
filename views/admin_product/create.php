<?php include ROOT . '/views/layouts/header_admin.php'; ?>




<div class="container">

  <section class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Add new product</h3>
    </div>
    <div class="panel-body">


      <form action="#" method="post" enctype="multipart/form-data">


        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Product name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="name" id="name" placeholder="">
          </div>
        </div> <!-- form-group // -->

        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Code</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="code" id="name" placeholder="">
          </div>
        </div> <!-- form-group // -->

        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Price</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="price" id="name" placeholder="">
          </div>
        </div> <!-- form-group // -->

        <div class="form-group">
          <label for="tech" class="col-sm-3 control-label">Category</label>
          <div class="col-sm-3">
            <select name="category_id" class="form-control">

              <?php if (!empty($categoriesList)) : ?>
                <?php foreach ($categoriesList as $category) : ?>
                  <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                <?php endforeach; ?>
              <?php endif; ?>

            </select>
          </div>
        </div> <!-- form-group // -->

        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Brand</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="brand" id="name" placeholder="">
          </div>
        </div> <!-- form-group // -->

        <div class="col-sm-3">
          <label class="col-sm-3 control-label" for="image">Image (jpg/png):</label>
          <input type="file" name="image" id="image">
        </div>

        <div class="form-group">
          <label for="pDesc">Product Description</label>
          <textarea type="pDesc" class="form-control" id="pDesc" name="description"></textarea>
        </div> <!-- form-group // -->

        <div class="form-group">
          <label for="tech" class="col-sm-3 control-label">Product availability</label>
          <div class="col-sm-3">
            <select name="availability" class="form-control">

              <option value="1">Yes</option>
              <option value="0">No </option>
            </select>
          </div>
        </div> <!-- form-group // -->

        <div class="form-group">
          <label for="tech" class="col-sm-3 control-label">Is new?</label>
          <div class="col-sm-3">
            <select name="is_new" class="form-control">

              <option value="1">Yes</option>
              <option value="0">No </option>
            </select>
          </div>
        </div> <!-- form-group // -->

        <div class="form-group">
          <label for="tech" class="col-sm-3 control-label">Is reccomended?</label>
          <div class="col-sm-3">
            <select name="is_recommended" class="form-control">

              <option value="1">Yes</option>
              <option value="0">No </option>
            </select>
          </div>
        </div> <!-- form-group // -->

        <div class="form-group">
          <label for="tech" class="col-sm-3 control-label">Status</label>
          <div class="col-sm-3">
            <select name="status" class="form-control">

              <option value="1">Displayed</option>
              <option value="0">No </option>
            </select>
          </div>
        </div> <!-- form-group // -->

        <br>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
            <input type="submit" name="submit" class="btn btn-defaul" value="Save">
          </div>
        </div> <!-- form-group // -->
      </form>

    </div><!-- panel-body // -->
  </section><!-- panel// -->


</div> <!-- container// -->
<br>


<?php include ROOT . '/views/layouts/header_admin.php'; ?>