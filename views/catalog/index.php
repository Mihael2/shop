<?php include ROOT . '/views/layouts/header.php'; ?>


<div class="support-section wf-section">
  <div class="container">
    <div class="support-top-wrapper">
      <div class="support-top-left">
        <div class="support-top-details-text"></div>
        <h2 class="support-top-heading">Categories:</h2>
      </div>
      <div class="support-top-right">
        <p></p>
      </div>
    </div>
    <div class="support-wrapper">
      <?php foreach ($categories as $categoryItem) : ?>

        <div class="support-column">
          <div class="support-square">
            <div class="support-square-number"><?php echo $categoryItem['id']; ?></div>
            <div class="support-square-text">
              <a href="/category/<?php echo $categoryItem['id']; ?>">
                <?php echo $categoryItem['name']; ?>
              </a>
              <br>
            </div><img src="https://assets.website-files.com/5e7ff3ec0c4ef4c974fa99e3/5e7ff57a5836db2a07bab0e3_Circle.svg" alt="Circle Decoration in Shop Products Block" class="support-square-image">
          </div>
        </div>

      <?php endforeach; ?>
    </div>
  </div>
</div>


<?php include ROOT . '/views/layouts/footer.php'; ?>