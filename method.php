<?php

const RECORD = 100000;
const REF = 200;
$section = file('/usr/share/dict/american-english');

class methodFile
{
    public function loadfile($filename)
    {
        $millisecondsSt = round(microtime(true) * 10000);
        $fp = fopen($filename, 'a+');

        for ($i = 1; $i <= RECORD; $i++) {
            $saveFile = self::addTo();
            fwrite($fp, $saveFile);
        }
        fclose($fp);
        $millisecondsF = round(microtime(true) * 10000);
        $res = $millisecondsF - $millisecondsSt;
        print_r($res/10000);
    }

    public function run($filename)
    {
        $fp = fopen($filename, 'a+');
        for ($i = 1; $i <= REF; $i++) {
            $saveFile = self::comparsion('file/file1.txt');
            fwrite($fp, $saveFile);
            $saveFile = self::comparsion('file/file2.txt');
            fwrite($fp, $saveFile);
        }
        fclose($fp);
    }

    public static function addTo()
    {
        global $section;
        $r = rand(10, 20);
        $rand_keys = array_rand($section, $r);
        foreach ($rand_keys as $key => $value) {
            $arr[] = trim($section[$rand_keys[$key]], "\n");
        }

        $result = implode(" ", $arr) . "\n";

        return $result;
    }

    public static function comparsion($filename)
    {
        $txt = file($filename);
        $str = $txt[array_rand($txt)];
        return $str;
    }

    public static function sortSt($filename)
    {
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

    public function insertSort($filename) {
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

    public function sort($filename){

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
    public function selectSort($filename) {
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