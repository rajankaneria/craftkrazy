		<li>
            <div class="dropdownlink"><?php echo $mc_name;?>
              <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </div>
            <ul class="submenuItems">
            <?php foreach ($subCategory as $key => $subcatRow) { ?>
              <li><a href="<?php echo base_url()?>product/parentCategory/<?php echo $subcatRow["mc_id"]."/".$subcatRow["pc_id"]; ?>"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp; <?php echo $subcatRow["pc_name"]; ?></a></li>
              <?php } ?>
              
            </ul>
          </li>