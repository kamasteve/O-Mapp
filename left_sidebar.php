<div class="col-sm-2 col-lg-2">
<div class="sidebar-nav">
<div class="nav-canvas">
<div class="nav-sm nav nav-stacked">
</div>
<ul class="nav nav-pills nav-stacked main-menu">
<?php

	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
	$query = $mysqli->query("SELECT * FROM menu_details where PARENT_MENU_ID='2' ORDER BY menu_id ASC");
				$rowCount = $query->num_rows;
				if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
			echo '<li><a class="ajax-link" href="'.$row['MENU_URL'].'"><i class="'.$row['MENU_ICON'].'"></i><span> '.$row['DISPLAY_STRING'].'</span></a></li>';
                //echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
            }
        }else{
            echo '<option value="">Roles Not created</option>';
        }
	
	?>
	</ul>
                   
                </div>
            </div>
        </div>			
	