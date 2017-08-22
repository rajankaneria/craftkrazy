<div class="main-cat-container">
	<div class="main-cat-title"><?php echo $mc_name; ?></div>
	<?php foreach ($subCategory as $key => $subcatRow) { ?>
		<div class="sub-cat-name"><?php echo $subcatRow["pc_name"]; ?></div>
	<?php } ?>
</div>