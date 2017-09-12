<div class="main-cat-container">
	<div class="main-cat-title"><a href="<?php echo base_url() ?>product/id/<?php echo $mc_id; ?>"><?php echo $mc_name; ?></a></div>
	<?php foreach ($subCategory as $key => $subcatRow) { ?>
		<div class="sub-cat-name"><?php echo $subcatRow["pc_name"]; ?></div>
	<?php } ?>
</div>