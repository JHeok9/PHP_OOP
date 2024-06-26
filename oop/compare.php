<h1>Function</h1>
<?php
var_dump(is_file('data.txt'));
var_dump(is_dir('data.txt'));
var_dump(file_get_contents('data.txt'));
file_put_contents('data.txt', rand(1,100));
?>
<h1>Object</h1>
<?php
$file = new SplFileObject('data.txt');
var_dump($file->isFile());
var_dump($file->isDir());
var_dump($file->fread($file->getSize()));
$file->fwrite($file,(rand(1,100)));

$file2 = new SplFileObject('data2.txt');
var_dump($file->isFile());
var_dump($file->isDir());
var_dump($file->fread($file->getSize()));
$file->fwrite($file,(rand(1,100)));

// SplFileObject : Class
// $file, $file2 : Instance
// isFile, isDir, fread : Method(Function)
// data.txt, data2.txt : state
?>