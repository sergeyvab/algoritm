<?php
include 'method.php';
class add extends methodFile {
    public function comparsionArr($filename){

        $millisecondsSt = round(microtime(true) * 10000);

        $arr1 = add::sortSt($filename);
        $arr2 = file('file/reference.txt');

        $fp = fopen('file/resultFile.txt', 'a+');

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

    public function comparsionArrHash($filename){

        $millisecondsSt = round(microtime(true) * 10000);

        $arr1 = add::sortSt($filename);
        $arr2 = file('file/reference.txt');

        $c = [];
        foreach ($arr2 as $key=>$value){
            $c []= md5($value);
        }

        $fp = fopen('file/resultFileHash.txt', 'a+');

        $a = '';
        foreach( $arr1 as $value )
        {
            $b = md5($value);
            if( ! in_array( $b, $c ) )
                $a .= $b."\n";
        }
        fwrite($fp, $a);
        fclose($fp);
        $millisecondsF = round(microtime(true) * 10000);
        $res = $millisecondsF - $millisecondsSt;
        print_r($res/10000);

    }
}
add::comparsionArr('file/file3.txt');


//$arr1 = file('file/file3.txt');
//$arr2 = file('file/file4.txt');
//
//$c = [];
//foreach ($arr2 as $key=>$value){
//    $c []= md5($value);
//}
//var_dump($c);
//
//
//$a = "";
//foreach ($arr1 as $value){
//    $b = (md5($value));
//    var_dump($b);
//
//
//    if( ! in_array( $b, $c ) )
//                $a .= $b;
//
//            var_dump($a);
//
//    }

//$a = "";
//        foreach( $arr1 as $word )
//
//        {
//            var_dump($arr2);
//            if( ! in_array( $word, $arr2 ) )
//                $a .= $word;
//
//            echo($a);
//        }




























