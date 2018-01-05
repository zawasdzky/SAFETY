<button  class="scrollToTop"> <i class="fa fa-caret-up fa-2"></i> </button>
<script src="<?php echo base_url();?>assets/js/jquery-1.10.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.vticker.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.bxslider.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.jcarousel.min.js"></script>
<script src='<?php echo base_url();?>assets/js/fullcalendar.min.js'></script>
<script src="<?php echo base_url();?>assets/js/weather.js"></script>
<script src="<?php echo base_url();?>assets/js/Chart.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.easy-pie-chart.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url();?>assets/js/functions.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.paginate.js"></script>
<script type="text/javascript">
   $('#paginar').paginate({
  // how many items per page
  perPage:                5,      
  // boolean: scroll to top of the container if a user clicks on a pagination link        
  autoScroll:             true,           
  // which elements to target
  scope:                  '',         
  // defines where the pagination will be displayed    
  paginatePosition:       ['bottom'],     
  // Pagination selectors
 // containerTag:           'nav',
  paginationTag:          'ul',
  itemTag:                'li',
  //linkTag:                'a',
  // Determines whether or not the plugin makes use of hash locations
  useHashLocation:        true,           
  // Triggered when a pagination link is clicked
  onPageClick:            function() {}   
});
</script>