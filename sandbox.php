<?php
// file system part 1 : 
// $quotes = readfile('readme.txt');
// echo $quotes;
// $file = 'quotes.txt';
// if (file_exists($file)) {
//     // read file
//     // echo readfile($file) . '<br />';
//     // //copy file
//     // copy($file, 'quotes.txt');
//     // // absolute path
//     // echo realpath($file) . '<br /> ';
//     // // file size 
//     // echo filesize($file) . '<br />';
//     // // rename file
//     // rename($file, 'test.txt');
// } else {
//     echo 'file does not exist';
// }
// // make directory
// mkdir('quotes');


// opening a file for reading:
// $handle = fopen($file, 'a+');

// read the file:
// echo fread($handle, filesize($file));
//echo fread($handle, 112);
// echo fgets($handle);
// echo fgets($handle);

//read a single character: 
// echo fgetc($handle);

//writing to a file: 
// fwrite($handle, "\nEverything popular is wrong");


// how to delete a file:
// fclose($handle);
// unlink($file);
