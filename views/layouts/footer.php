<div class="footer wf-section">
      <div class="container">
        <div class="footer-wrapper">
          
          <div>
            <a href="https://twitter.com/webflow"
            target="_blank" class="social-footer-link w-inline-block"><img src="https://assets.website-files.com/5e7ff3ec0c4ef4c974fa99e3/5e8407a25b6234aeec960fb9_Twitter_Social_Icon_Rounded_Square_White.svg"
              width="30" alt="Twitter Logo"
              /></a>
            <a href="https://www.facebook.com/webflow"
            class="social-footer-link w-inline-block"><img src="https://assets.website-files.com/5e7ff3ec0c4ef4c974fa99e3/5e8407aa3fb6cf5576f1658b_Facebook%20Logo.svg"
              width="30" alt="Facebook Logo"
              /></a>
            <a href="https://www.instagram.com/webflow/"
            target="_blank" class="social-footer-link w-inline-block"><img src="https://assets.website-files.com/5e7ff3ec0c4ef4c974fa99e3/5e840774014326b74bbeeeb6_Insta.svg"
              width="30" alt="Instagram Logo"
              /></a>
          </div>
        </div>
        <div class="footer-bottom-wrapper">
          <div class="small footer-small"> <a href="https://webflow.com"
            target="_blank"></a>
            © 2022.</div>
        </div>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
      <script>
             $(document).ready(function(){
                $(".add-to-cart").click(function () {
                    var id = $(this).attr("data-id");
                    $.post("/cart/addAjax/"+id, {}, function (data) {
                        $("#cart-count").html(data);
                    });
                    return false;
                });
            });
        </script>

    
    </body>

</html>