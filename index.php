<?php

//class addFile{
//
//
//    function loadfile(){
//
//        $section = file('/usr/share/dict/american-english');
//
//
//        for ($i=0;$i<=count($section);$i++){
//            $rand_keys = array_rand($section, 3);
//            $res = $section[$rand_keys[$i]];
//        }
//        $res1 = $section[$rand_keys[0]] ."\n";
//        $res2 = $section[$rand_keys[1]] ."\n";
//        $res3 = $section[$rand_keys[2]] ."\n";
//
//        $fp = fopen('text.txt', 'a+');
//        fwrite($fp, $res1);
//        fwrite($fp, $res2);
//        fwrite($fp, $res3);
//        fclose($fp);
//    }
//
//    function loadfile2(){
//        $section = file('/usr/share/dict/american-english');
//
//        $rand_keys = array_rand($section, 3);
//        $res1 = $section[$rand_keys[0]];
//        $res2 = $section[$rand_keys[1]];
//        $res3 = $section[$rand_keys[2]];
//
//
//        $fp = fopen('data.txt', 'a+');
//        fwrite($fp, $res1);
//        fwrite($fp, $res2);
//        fwrite($fp, $res3);
//        fclose($fp);
//    }
//
//    function loadfile3(){
//        $fp1 = file('data.txt');
//        $fp2 = file('text.txt');
//        $result = array_diff($fp1, $fp2);
//
//        $rand_keys = array_rand($result, 3);
//        $res1 = $result[$rand_keys[0]];
//        $res2 = $result[$rand_keys[1]];
//        $res3 = $result[$rand_keys[2]];
//
//
//        $fp = fopen('data1.txt', 'a+');
//        fwrite($fp, $res1);
//        fwrite($fp, $res2);
//        fwrite($fp, $res3);
//        fclose($fp);
//
//    }
//    private static function addToFile(){
//
//    }
//}
//addFile::loadfile2();




$section = file('/usr/share/dict/american-english');
$fp = fopen('data.txt', 'a+');

for ($i=1; $i<=count($section); $i++){
    $rand_keys = array_rand($section, $i);


    //var_dump($rand_keys);exit();

}
//
//        $res1 = $section[$rand_keys[0]] ."\n";
//        $res2 = $section[$rand_keys[1]] ."\n";
//        $res3 = $section[$rand_keys[2]] ."\n";
//
//$res = (($section[$rand_keys[0]]) . ($section[$rand_keys[1]]) . ($section[$rand_keys[2]]));
//
//$fp = fopen('data.txt', 'a+');
//fwrite($fp, $res1);
//fwrite($fp, $res2);
//fwrite($fp, $res3);
//fclose($fp);
//
//
//
//
//$section = file('/usr/share/dict/american-english');
//
//$rand_keys = array_rand($section, 3);
//$res = (($section[$rand_keys[0]]) . ($section[$rand_keys[1]]) . ($section[$rand_keys[2]]));
//
//
//
//$fp = fopen('text.txt', 'a+');
//$fp2 = file('text.txt');
//var_dump($fp2);
////fwrite($fp, $res);
//fclose($fp);

//$result = array_diff($fp1, $fp2);
//var_dump($result);

