<h1>Function</h1>
<?php
var_dump(is_file('data.txt'));
var_dump(is_dir('data.txt'));
var_dump(file_get_contents('data.txt'));
file_put_contents('data.txt', rand(1,100));
?>
<h1>Object</h1>