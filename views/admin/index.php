<?php include ROOT . '/views/layouts/header_admin.php'; ?>



<div class="safe-section wf-section">
  <div class="container">
    <div class="safe-wrapper">
      <h2 class="safe-heading">Hello, admin <?php echo $user['name']; ?></h2>
      <p class="safe-paragraph">Your possibilities:</p>

      <div class="safe-button-wrapper">
        <a href="/admin/product" class="btn light hero safe w-button">Product control</a>
        <a href="/admin/category" class="btn light hero safe w-button">Category control</a>
        <a href="/admin/order" class="btn light hero safe w-button">Booking control</a>
      </div>

    </div>
  </div>

  <?php include ROOT . '/views/layouts/footer_admin.php'; ?>