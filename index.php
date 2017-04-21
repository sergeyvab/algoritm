<?php

$section = file('/usr/share/dict/american-english');
const CONSTANT = 100000;
class addFile{

    public function loadfile($filename)
    {
        $fp = fopen($filename, 'a+');

        for ($i = 1; $i <= CONSTANT; $i++) {
            $saveFile = self::addTo();
            fwrite($fp, $saveFile);
        }
        fclose($fp);

    }

    public function run($filename){

        $fp = fopen($filename, 'a+');
        for ($i=1; $i<=100;$i++){
            $saveFile = addFile::comparsion('file1.txt');
            fwrite($fp, $saveFile);
            $saveFile = addFile::comparsion('file2.txt');
            fwrite($fp, $saveFile);
        }
        fclose($fp);
    }

//    public function comparsionArrFin($filename){
//
//        $millisecondsSt = round(microtime(true) * 10000);
//
//        $fp = fopen('resultFile.txt', 'a+');
//
//        for ($i=1; $i<=count($filename); $i++){
//        $res = addFile::comparsionArr($filename);
//        fwrite($fp, $res);
//        }
//        fclose($fp);
//
//        $millisecondsF = round(microtime(true) * 10000);
//
//        $res = $millisecondsF - $millisecondsSt;
//        print_r($res/10000);
//
//    }

    public static function addTo(){

        global $section;
        $r = rand(2, 3);
        $rand_keys = array_rand($section, $r);
        foreach ($rand_keys as $key=>$value){
            $arr[] = trim($section[$rand_keys[$key]], "\n");
        }
        $result = implode(" ",$arr )."\n";

        return $result;
    }

    public function comparsion($filename){
        $txt = file($filename);
        $str = $txt[array_rand($txt)];
        return $str;
    }

    public function comparsionArr($filename){

        $millisecondsSt = round(microtime(true) * 10000);

        $arr1 = file($filename);
        $arr2 = addFile::sortSt('reference.txt');

//        $countarr1 = count($arr1);
//        $countarr2 = count($arr2);

        $fp = fopen('resultFile.txt', 'a+');

        $a = '';
        foreach( $arr1 as $word )
        {
            if( ! in_array( $word, $arr2 ) )
                $a .= $word;
        }
        fwrite($fp, $a);

//        for ($i = 0; $i < $countarr1; $i++) {
//            for ($j = 0; $j < $countarr2; $j++) {
//                if ($arr2[$j] == $arr1[$i]) {
//
//                    $a =$arr1[$i];
//
//                    fwrite($fp, $a);
//
//                    break;
//
//                }
//            }
//        }
        fclose($fp);
        $millisecondsF = round(microtime(true) * 10000);
        $res = $millisecondsF - $millisecondsSt;
        print_r($res/10000);

    }

    public function sortSt($filename){
        $fp = fopen($filename, "a");
        $arr = file($filename);
        sort($arr);
        for($i=0; $i < count($arr); $i++)
        {
            //echo ("$i:$arr[$i]  ");
        }
        fclose($fp);

        return $arr;
    }

    function insertSort($filename) {
        $arr = file($filename);
        $count = count($arr);
        if ($count <= 1) {
            return $arr;
        }

        for ($i = 1; $i < $count; $i++) {
            $cur_val = $arr[$i];
            $j = $i - 1;

            while (isset($arr[$j]) && $arr[$j] > $cur_val) {
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $cur_val;
                $j--;
            }
        }

        return $arr;
    }

    private function sort($filename){

        $arr1 = file($filename);

        for ($i = 0; $i <= count($arr1)-1; $i++)
        {
            for ($j = 0; $j <= count($arr1)-1; $j++)
            {
                if($arr1[$i] < $arr1[$j])
                {
                    $temp = $arr1[$i];
                    $arr1[$i] = $arr1[$j];
                    $arr1[$j] = $temp;
                }
            }
        }
        return $arr1;

    }

    public function sortBubble($filename){

        $array = file($filename);

        for ($i=0; $i < count($array); $i++)
        {
            for ($y=($i+1); $y < count($array); $y++)
            {
                if ($array[$i] > $array[$y])
                {
                    $c = $array[$i];
                    $array[$i] = $array[$y];
                    $array[$y] = $c;
                }
            }
        }
        return $array;

    }
    function selectSort($filename) {
        $arr = file($filename);
        $count= count($arr);
        if ($count <= 1){
            return $arr;
        }

        for ($i = 0; $i < $count; $i++){
            $k = $i;

            for($j = $i + 1; $j < $count; $j++){
                if ($arr[$k] > $arr[$j]){
                    $k = $j;
                }

                if ($k != $i){
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$k];
                    $arr[$k] = $tmp;
                }
            }
        }

        return $arr;
    }
}
addFile::comparsionArr('file1.txt');
//
//
//
//$arr1 = file('file1.txt');
//$arr2 = file('reference.txt');
//$arr = array_diff($arr1, $arr2);
//echo $arr;
//
//$countarr1 = count($arr1);
//$countarr2 = count($arr2);
//
//$fp = fopen('resultFile.txt', 'a+');
//
//for ($i = 0; $i < $countarr1; $i++) {
//    for ($j = 0; $j < $countarr2; $j++) {
//        if ($countarr1> $countarr2) {
//
//            $a =$arr2[$i];
//            echo "<pre>";
//            echo $a;
//            echo "</pre>";
//
////            fwrite($fp, $a);
//
//            break;
//
//        }
//    }
//}
//fclose($fp);





//$arr = file('file1.txt');

//class A{
//
//    public function quickSort() {
//        $arr1 = file('file1.txt');
//        $arr2 = file('reference.txt');
//
//$a = (string) $out;
//        foreach( $arr1 as $word )
//        {
//            if( ! in_array( $word, $arr2 ) )
//                $a .= $word;
//        }
//        echo "<pre>";
//        echo $a;
//        echo "</pre>";
//    }
//}
//$reuslt = A::quickSort();
