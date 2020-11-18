<h2>home's view</h2>

<p>
	We have products like:
	<br>
	<ul>
		<?php foreach ($VIEWDATA['productNames'] as $prodName){ ?>

		<li>
			<?php echo $prodName; ?>
		</li>

		<?php } ?>
	</ul>
	<br>
	<a href = "?c=more" >For more...</a>

</p>