<!-- POP UP PAUTA -->
    <div class="popup hidden-phone " id="pop_up">
        <a href="mailto:marketing@safetyworkla.com" target="_top" class="hidden-xs hidden-sm"><img src="<?php echo base_url();?>images/popover.jpg"></a>
    </div>

<!--    <div style="right: 0px; position: fixed; top: 25%;   box-shadow:  5px 2px 15px gray;">
        <a href="mailto:marketing@safetyworkla.com" target="_top"><img src="<?php echo base_url();?>images/popover.jpg" width="200"></a>
   </div> -->
     <script type="text/javascript">
        $('.popup').on('click', function(e) {
        $('.popup').toggleClass("open"); 
          //e.preventDefault();      
        });

      setInterval(mostrar_pop, 20000);
      setInterval(mostrar_pop, 25000);
      function mostrar_pop(){
      $('.popup').toggleClass("open"); 
      }

    </script>

<!-- FIN POP UP PAUTA -->