<?php include ROOT.'/views/layouts/header_admin.php';?>

<h1>
  Delete product number <?php echo $id; ?>
</h1>
<p>
  You realy want to delete this product?
</p>


<div class="shop-button-wrapper">
    <form method="post">
        <input type="submit" name="submit" value="Delete" />
    </form>
</div>    







<?php include ROOT.'/views/layouts/footer_admin.php';?>