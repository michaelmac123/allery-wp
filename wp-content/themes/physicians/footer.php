		</div>
      <div id="footer">
        <ul><?php
            /* the echo=0 parma is important here to prevent double menu */
            add_last_class(wp_list_pages('title_li=&sort_column=menu_order&depth=1&echo=0'));
        ?></ul>
        <p>&copy;<?php echo date("Y"); echo " Allergy Allies "; bloginfo('name'); ?></p>
      </div>

	</div>

	<?php wp_footer(); ?>

	<!-- Don't forget analytics -->

  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25655372-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>

</html>
