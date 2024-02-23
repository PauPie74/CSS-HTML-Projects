<div class="container">
	<header class="content-header">
		<div class="meta mb-3"><span class="date"><?php the_date(); ?></span>
		<?php
			#in the () the styles of the tags, 1st: beginning, 2nd in-between, 3rd: closing all
			the_tags('<span class="tag"><i class="fa fa-tag">', '</span><span class="tag"><i class="fa fa-tag">','/span');
		?>

		<span class="comment"><a href="#comments"><i class='fa fa-comment'></i><?php comments_number(); ?></a></span></div>
	</header>

	<?php
		the_content();
	?>

	<?php
		comments_template();
	?>


</div>