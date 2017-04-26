<?php
require_once'vendor/autoload.php';
use Algoritm\Method;

class Result extends Method {
    public function comparsionArr($filename){

        //$obj = new Method();

        $arr1 = file($filename);
//        $arr2 = $obj->sortSt('file/reference.txt');
        $arr2 = self::sortSt('file/reference.txt');

        $fp = fopen('file/resultFile.txt', 'a+');

        $millisecondsSt = round(microtime(true) * 10000);

        $a = '';
        foreach( $arr1 as $word )
        {
            if( ! in_array( $word, $arr2 ) )
                $a .= $word;
        }

        $millisecondsF = round(microtime(true) * 10000);
        $res = $millisecondsF - $millisecondsSt;
        print_r($res/10000);

        fwrite($fp, $a);

        fclose($fp);

    }

    public function comparsionArrHash($filename){

        $obj = new Method();

        $arr1 = file($filename);
        $arr2 = $obj->sortSt('file/reference.txt');

        $c = [];
        foreach ($arr2 as $key=>$value){
            $c []= md5($value);
        }

        $fp = fopen('file/resultFileHash.txt', 'a+');

        $millisecondsSt = round(microtime(true) * 10000);

        $a = '';
        foreach( $arr1 as $value )
        {
            $b = md5($value);
            if( ! in_array( $b, $c ) )
                $a .= $b."\n";
        }

        $millisecondsF = round(microtime(true) * 10000);
        $res = $millisecondsF - $millisecondsSt;
        print_r($res/10000);

        fwrite($fp, $a);
        fclose($fp);

    }

    public function comparsionArrDiff($filename){

        $obj = new Method();

        $fp = fopen('file/resultFileDiff.txt', 'a+');

        $arr1 = file($filename);
        $arr2 = $obj->sortSt('file/reference.txt');

        $millisecondsSt = round(microtime(true) * 10000);

        $result = array_diff($arr1, $arr2);
        $res1 = implode(" ", $result)."\n";

        $millisecondsF = round(microtime(true) * 10000);
        $res = $millisecondsF - $millisecondsSt;
        print_r($res/10000);

        fwrite($fp, $res1);
        fclose($fp);


    }
}

$res = new Result();
$res->comparsionArr('file/file2.txt');
