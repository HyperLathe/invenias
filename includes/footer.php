<div class="footer_content">
  <div class="container-fluid">
    <div class="row">
      
      <div class="col-xs-12 col-sm-8 col-md-8">
        <div class="social_links">
          <a href="#"><img src="images/footer_linkedin.gif" class="img-responsive"></a>
          <a href="#"><img src="images/footer_twitter.gif" class="img-responsive"></a>
        </div>
        <ul class="footer_links">
          <li><a href="#">Site Map</a></li>
          <li><a href="#">Terms &amp; Conditions</a></li>
          <li><a href="#">Privacy Statement</a></li>
          <li><a href="#">Cookies</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      
      <div class="col-xs-12 col-sm-4 col-md-4">
        <p>Invenias Limited, Davidson House,<br>Forbury Square, Reading, Berkshire RG1 3EU<br>&copy; Copyright Invenias Limted. All Rights Reserved</p>
      </div>
      
    </div>
  </div>
</div>


<!-- script for mega-menu dropdown -->
<script>
$('.dropdown-toggle').on('click', function(){
   var target = $(this).attr('rel');
   $("#"+target).show().siblings("div").hide();
});
</script>

<!-- script for inner-menu extension -->
<script>
  $('#innermenu-toggle1').click(function(e){
    $('#innermenu1').show().siblings('div').hide();
	e.stopPropagation();
  });
  $('#innermenu-toggle2').click(function(e){
    $('#innermenu2').show().siblings('div').hide();
	e.stopPropagation();
  });
</script>


<!-- script to close the mega menu when clicked outside -->
<script>
$(document).bind( "mouseup touchend", function(){
    var container = $('.submenu_container');
    if (!container.is(e.target)
        && container.has(e.target).length === 0)
    {
        container.hide();
		$('.nav li').removeClass('open');
    }
});
</script>

<!-- To trigger up/down arrows on the collapsible accordions -->

<script>
$('.panel').on('hide.bs.collapse', function (e) {
    $(this).find(".close_link_content").hide();
    $(this).find(".open_link_content").show();
})

$('.panel').on('show.bs.collapse', function (e) {
    $(this).find(".close_link_content").show();
    $(this).find(".open_link_content").hide();
})
</script>

<!-- Region address info reveal on click -->

<script>
$(".region_select").click( function() {
    var r_id = $(this).data('contentid');
	$('.region_address_panel').show();
    $('#region_address-' + r_id).show().siblings('span').hide();
});
$(".allregions").click( function() {
	$('.region_address_panel').hide();
});
</script>

<!-- Customer information reveal on hover -->

<script>
$(".customer_logo").hover( function() {
    var num = $(this).data('contentid');
    $('#customerInfo-' + num).show().siblings('span').hide();
    
});
</script>

<!-- Script to replicate the address info into the top of the Customers page -->

<script>
 if ($(window).width() < 768) {
 $( ".region_address_panel" ).clone().appendTo( ".region_address_panel_top" );
 }
</script>

