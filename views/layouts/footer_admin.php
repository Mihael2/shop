<div class="footer wf-section">
  <div class="container">
    <div class="footer-wrapper">

    </div>
    <div class="footer-bottom-wrapper">
      <div class="small footer-small"> <a href="https://webflow.com" target="_blank"></a>
        © 2022.</div>
    </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $(".add-to-cart").click(function() {
      var id = $(this).attr("data-id");
      $.post("/cart/addAjax/" + id, {}, function(data) {
        $("#cart-count").html(data);
      });
      return false;
    });
  });
</script>


</body>

</html>