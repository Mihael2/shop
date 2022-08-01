<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<?php if (!empty($errors)) {
  print_r($errors);
};?>





<div class="container">

  <section class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Add new category</h3>
    </div>
    <div class="panel-body">


      <form action="#" method="post">


        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Category name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="name" id="name" placeholder="">
          </div>
        </div> <!-- form-group // -->

        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Sort order</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="sort_order" id="name" placeholder="" value="<?php echo $lastCategorySortOrder['sort_order'] + 1; ?>">
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