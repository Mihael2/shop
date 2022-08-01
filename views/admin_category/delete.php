<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<h1>
  Delete category with id <?php echo $id; ?>
</h1>
<p>
  You realy want to delete this category?
</p>


<div class="shop-button-wrapper">
  <form method="post">
    <input type="submit" name="submit" value="Delete" />
  </form>
</div>







<?php include ROOT . '/views/layouts/footer_admin.php'; ?>