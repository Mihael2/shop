<?php include ROOT. '/views/layouts/header.php'?>

<?php if($result): ?>
  <p>Checkout successfull.</p>
<?php else: ?>
  <p>Choosed products:<?php echo $totalQuantity; ?> for <?php echo $totalPrice; ?>$ </p>
  <div class='card-checkout'>
    <?php if(!empty($errors)): ?>
      <ul>
        <?php foreach($error as $error): ?>
          <li>- <?php echo $error; ?></li>
        <?php endforeach; ?>  
      </ul>
      <?php endif; ?>

      <div class='heading'>
          <h3>Fill the form</h3>
      </div>

      <div class='content'>
        <form method = "post">
          <p>Your name</p>
          <input type="text" name = "userName" placeholder = "" value = "<?php echo $userName; ?>"/>
          <p>Your phone</p>
          <input type="text" name = "userPhone" placeholder = "" value = ""/>
          <p>Your comment</p>
          <input type="text" name = "userComment" placeholder = "" value = ""/>

          <br/>
          <br/>

          <input type="submit" name ="submit" class = "btn btn-default" value ="Checkout"/>

        </form>
      </div>
      <?php endif; ?>

  </div>

<?php include ROOT. '/views/layouts/footer.php'?>
