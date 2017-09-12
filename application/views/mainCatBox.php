<div class="main-cat-container">
	<div class="main-cat-title"><a href="<?php echo base_url() ?>product/mainCategory/<?php echo $mc_id; ?>"><?php echo $mc_name; ?></a></div>
	<?php foreach ($subCategory as $key => $subcatRow) { ?>
		<div class="sub-cat-name">
		<a href="<?php echo base_url()?>product/parentCategory/<?php echo $subcatRow["mc_id"]."/".$subcatRow["pc_id"]; ?>">
		<?php echo $subcatRow["pc_name"]; ?></a></div>
	<?php } ?>
</div>