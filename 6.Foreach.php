<?php 
/**
 * foreach memiliki fungsi yang hampir sama seperti for yakni mengulang aksi atau perulangan, 
 * namun foreach sering digunakan untuk menampilkan array
 */

$x  = array("satu","dua","tiga","empat");
foreach($x as $value)
{
    echo $value;
    echo "<br>";
}