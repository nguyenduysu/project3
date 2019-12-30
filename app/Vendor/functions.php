<?php 
function cate_parent($cates, $parent_id = 0, $str = "--", $select = 0) {
	foreach ($cates as $cate) {
		$id = $cate['id'];
		$name = $cate['name'];
		if($cate['parent_id'] == $parent_id) {
			if($select != 0 && $id == $select) {
				echo "<option value='$id' selected='selected'>$str $name</option>";
			} else {
				echo "<option value='$id'>$str $name</option>";
			}
			cate_parent($cates, $id, $str."--", $select);
		}
	}
}
?>