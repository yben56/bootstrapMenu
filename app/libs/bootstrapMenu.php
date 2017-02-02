<?PHP
/*
The MIT License (MIT)

 * Copyright (c) 2017 Benjamin Wong, benjamin-w@hotmail.com
 * https://github.com/yben56/bootstrapMenu
 * Dependencies - jquery-3.1.1, Bootstrap v3.3.6

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), 
to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, 
and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, 
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, 
DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

function bootstrapMenu($id, $arr, $style = FALSE, &$sub_id = 0, $dropdownTitle = FALSE){
	
	if ($style) { $style = "navbar-nav"; }
	
	if ($dropdownTitle == FALSE) {
		echo "<div id='$id' class='collapse navbar-collapse'><ul class='nav $style'>";
		
		foreach ($arr as $key => $value) {
			if (!is_array($value)) {
				echo "<li><a href='$value'>$key</a></li>";
			} else {
				bootstrapMenu($id, $value, $style, $sub_id, $key);
			}
		}
	
		echo "</ul></div>";	
	} else {
		$sub_id++;
			
		echo "
			<li class='dropdown'>
			<a data-target='#$id-$sub_id' data-toggle='collapse'>$dropdownTitle<span class='caret'></span></a>
			<ul class='nav collapse' id='$id-$sub_id'>
		";
			
		foreach ($arr as $key => $value) {
			if (!is_array($value)) {
				echo "<li><a href='$value'>$key</a></li>";
			} else {
				bootstrapMenu($id, $value, $style, $sub_id, $key);
			}
		}

		echo "</ul></li>";
	}
}
?>