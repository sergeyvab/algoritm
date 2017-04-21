<?php

$section = file('/usr/share/dict/american-english');
const CONSTANT = 10000;
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
        for ($i=1; $i<=3;$i++){
            $saveFile = addFile::comparsion('file1.txt');
            fwrite($fp, $saveFile);
            $saveFile = addFile::comparsion('file2.txt');
            fwrite($fp, $saveFile);
        }
        fclose($fp);
    }

    public function comparsionArrFin($filename){

        $millisecondsSt = round(microtime(true) * 10000);

        $fp = fopen('resultFile.txt', 'a+');

        for ($i=1; $i<=count($filename); $i++){
        $res = addFile::comparsionArr($filename);
        fwrite($fp, $res);
        }
        fclose($fp);

        $millisecondsF = round(microtime(true) * 10000);

        $res = $millisecondsF - $millisecondsSt;
        //print_r($res/10000);

    }

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

        $a = file($filename);
        $b = file('reference.txt');
        $c = array_diff($a, $b);
        $d = implode($c);

        return $d;

    }
}
addFile::comparsionArrFin('file1.txt');

