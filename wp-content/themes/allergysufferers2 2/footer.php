  		  </div>
  		</div><!-- Container-->
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

</body>

</html>
