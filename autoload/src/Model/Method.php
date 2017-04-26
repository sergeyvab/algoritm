<?php
namespace Model;

const RECORD = 1000;
const REF = 200;

class Method extends Sort
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
        //global $section;
        $section = file('/usr/share/dict/american-english');
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
}