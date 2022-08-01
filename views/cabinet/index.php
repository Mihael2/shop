<?php include ROOT . '/views/layouts/header.php'?>

<div class="safe-section wf-section">
      <div class="container">
        <div class="safe-wrapper">
          <h2 class="safe-heading">User account</h2>
          <h2 class="safe-heading">Hi, <?php echo $user['name'];?>!</h2>
            <div class="safe-button-wrapper"><a href="/cabinet/edit/"
                   class="btn light hero safe w-button">Edit personal data</a>
            </div>
            <br>
            <div class="safe-button-wrapper"><a href="/alert/how-were-responding-to-covid-19"
                   class="btn light hero safe w-button">Purchases</a>
             </div>
        </div>
      </div>
    </div>




<?php include ROOT . '/views/layouts/footer.php'?>