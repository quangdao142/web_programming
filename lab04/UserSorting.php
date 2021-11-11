<?php
	function user_sort($a,$b){
		if ($b=="smarts"){
			return 1;
		}
		else if ($a=='smarts'){
			return -1;
		}
		return ($a==$b) ? : (($a<$b) ?-1:1);
	}

	$value = array('name' => 'Buzz Lightyear',
					'email_address' => 'buzz@starcommand.gal',
					'age' =>32,
					'smarts' =>'some');
    $values=$value;

?>

<form action="UserSorting.php" method="post">
	<p>
		<input type="radio" name="sort_type" value="sort" checked="checked" />Standard sort<br>
		<input type="radio" name="sort_type" value="rsort"/>Reverse sort<br>
		<input type="radio" name="sort_type" value="usort"/>User-defined sort<br>
		<input type="radio" name="sort_type" value="ksort"/>Key sort<br>
		<input type="radio" name="sort_type" value="krsort"/>Reverse key sort<br>
		<input type="radio" name="sort_type" value="uksort"/>User-defined key sort<br>
		<input type="radio" name="sort_type" value="asort"/>Value sort<br>
		<input type="radio" name="sort_type" value="arsort"/>Reverse value sort<br>
		<input type="radio" name="sort_type" value="uasort"/>User-defined value sort<br>
	</p>
	
	<p align="center">
		<input type="submit" value="Sort" name="submitted"/>
	</p>

    <table>
        <tr>
            <td>Values (before sort) :</td>
            <td>
                <?php
                			foreach ($value as $key => $value) {
                				echo "<li><b>$key</b>: $value</li>";
                			}
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    if (isset($_POST['submitted'])) print("Values (after sort) :");
                ?>
            </td>
            <td>
                <?php
                if (isset($_POST['submitted'])) {
                    $submitted = $_POST['submitted'];
                    $sort_type = $_POST['sort_type'];
                    if ($submitted) {
                        if ($sort_type == 'usort' || $sort_type == 'uksort' ||
                            $sort_type == 'uasort') {
                            $sort_type($values, 'user_sort');
                        } else {
                            $sort_type($values);
                        }
                    }
                    foreach ($values as $key => $value) {
                        echo "<li><b>$key</b>: $value</li>";
                    }
                }
                ?>
            </td>
        </tr>
    </table>
</form>