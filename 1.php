<?php



//class SimpleClass
//{
//    // объявление свойства
//    public $var = 'значение по умолчанию';
//
//    // объявление метода
//    public function displayVar() {
//        echo $this->var;
//    }
//}
//
//class Test
//{
//    static public function getNew()
//    {
//        return new static();
//    }
//}
//
//class Child extends Test
//{}
//
//$obj1 = new Test();
//$obj2 = new $obj1;
//var_dump($obj1 !== $obj2);
//
//$obj3 = Test::getNew();
//var_dump($obj3 instanceof Child);
//
//$obj4 = Child::getNew();
//var_dump($obj4 instanceof Child);
//
//echo (new DateTime())->format('Y:m:d-h:m:s') . "<br>";
//
//
//class Foo
//{
//    public $bar = 'property';
//
//    public function bar() {
//        return 'method';
//    }
//}
//
//$obj = new Foo();
//echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL . "<br>";
//
//
//class Foo1
//{
//    public $bar;
//
//    public function __construct() {
//        $this->bar = function() {
//            return 42;
//        };
//    }
//}
//
//$obj = new Foo1();
//
//// Начиная с PHP 5.3.0:
//$func = $obj->bar;
//echo $func(), PHP_EOL;
//
//// или так, начиная с of PHP 7.0.0:
//echo ($obj->bar)(), PHP_EOL;
//
//
//class ExtendClass extends SimpleClass
//{
//    // Переопределение метода родителя
//    function displayVar()
//    {
//        echo "Расширенный класс <br>";
//        //parent::displayVar();
//    }
//}
//
//$extended = new ExtendClass();
//$extended->displayVar();
//
//
//class MyClass{
//
//    const CONSTANT = "new constant";
//    const FREDDI = "FREDDI";
//
//    function showConst(){
//
//    }
//}
//
//echo MyClass::CONSTANT . "<br>";
//
//$model = new MyClass();
//$model->showConst();
//echo $model::FREDDI. "<br>";
//
//
//const ONE = 1;
//
//class foo2 {
//    // С версии PHP 5.6.0
//    const TWO = ONE * 2;
//    const THREE = ONE + self::TWO;
//    const SENTENCE = 'The value of THREE is '.self::THREE;
//}
//
//echo  foo2::SENTENCE . "<br>";
//
//class MyClass1
//{
//    public $public = 'Public';
//    protected $protected = 'Protected';
//    private $private = 'Private';
//
//    function printHello()
//    {
//        echo $this->public;
//        echo $this->protected;
//        echo $this->private;
//    }
//}
//
//$obj = new MyClass1();
//echo $obj->public; // Работает
//echo $obj->protected; // Неисправимая ошибка
//echo $obj->private; // Неисправимая ошибка
//$obj->printHello(); // Выводит Public, Protected и Private
//


















//header('Content-type: image/jpeg');
//$filename = file_get_contents('img/full_2890_719.jpg');
//
//// Load
//$im = imagecreatefromstring($filename);
//
//$textcolor = imagecolorallocate($im, 253, 253, 153);
//$rectanglecolorgrey = imagecolorallocate($im, 135, 133, 134);
//$rectanglecolorgreen = imagecolorallocate($im, 55, 253, 64);
//
//
//$dateTime  = '2016-12-19 10:17:19.075';
//$speed     = 'Speed: 32.5 km/h';
//$frame     = 'Frame: 1/3';
//$latitude  = 'Latitude: 45.425415';
//$longitude = 'Longitude: -73.633916667';
//
//$two       = '2';
//$three     = '3';
//$four      = '4';
//$five      = '5';
//$six       = '6';
//$seven     = '7';
//$eight     = '8';
//$nine      = '9';
//$ten       = '10';
//$eleven    = '11';
//$twelve    = '12';
//$thirteen  = '13';
//$fourteen  = '14';
//$fifteen   = '15';
//
//$font = './OpenSans-Regular.ttf';
//
//imagesetthickness($im, 2);
//
//imageflip($im, IMG_FLIP_HORISONTAL);
//
//imagettftext($im, 45, 0, 14, 75, $textcolor, $font, $dateTime);
//imagettftext($im, 45, 0, 14, 145, $textcolor, $font, $speed);
//imagettftext($im, 45, 0, 14, 215, $textcolor, $font, $frame);
//
//imagettftext($im, 45, 0, 1140, 75, $textcolor, $font, $latitude);
//imagettftext($im, 45, 0, 1140, 145, $textcolor, $font, $longitude);
//
//imagerectangle($im, 2, 300, 118, 700, $rectanglecolorgrey);
//imagerectangle($im, 120, 300, 258, 700, $rectanglecolorgreen);
//imagerectangle($im, 260, 300, 398, 700, $rectanglecolorgreen);
//imagerectangle($im, 400, 300, 538, 700, $rectanglecolorgreen);
//imagerectangle($im, 540, 300, 678, 700, $rectanglecolorgreen);
//imagerectangle($im, 680, 300, 818, 700, $rectanglecolorgreen);
//imagerectangle($im, 820, 300, 958, 700, $rectanglecolorgreen);
//imagerectangle($im, 960, 300, 1098, 700, $rectanglecolorgrey);
//imagerectangle($im, 1100, 300, 1238, 700, $rectanglecolorgrey);
//imagerectangle($im, 1240, 300, 1378, 700, $rectanglecolorgrey);
//imagerectangle($im, 1380, 300, 1518, 700, $rectanglecolorgrey);
//imagerectangle($im, 1520, 300, 1658, 700, $rectanglecolorgrey);
//imagerectangle($im, 1660, 300, 1798, 700, $rectanglecolorgrey);
//imagerectangle($im, 1800, 300, 1918, 700, $rectanglecolorgrey);
//
//imagettftext($im, 25, 0, 10,   330, $rectanglecolorgrey, $font, $two);
//imagettftext($im, 25, 0, 130,  330, $rectanglecolorgreen, $font, $three);
//imagettftext($im, 25, 0, 270,  330, $rectanglecolorgreen, $font, $four);
//imagettftext($im, 25, 0, 410,  330, $rectanglecolorgreen, $font, $five);
//imagettftext($im, 25, 0, 550,  330, $rectanglecolorgreen, $font, $six);
//imagettftext($im, 25, 0, 690,  330, $rectanglecolorgreen, $font, $seven);
//imagettftext($im, 25, 0, 830,  330, $rectanglecolorgreen, $font, $eight);
//imagettftext($im, 25, 0, 970,  330, $rectanglecolorgrey, $font, $nine);
//imagettftext($im, 25, 0, 1110, 330, $rectanglecolorgrey, $font, $ten);
//imagettftext($im, 25, 0, 1250, 330, $rectanglecolorgrey, $font, $eleven);
//imagettftext($im, 25, 0, 1390, 330, $rectanglecolorgrey, $font, $twelve);
//imagettftext($im, 25, 0, 1530, 330, $rectanglecolorgrey, $font, $thirteen);
//imagettftext($im, 25, 0, 1670, 330, $rectanglecolorgrey, $font, $fourteen);
//imagettftext($im, 25, 0, 1810, 330, $rectanglecolorgrey, $font, $fifteen);
//
//// Output
//imagejpeg($im);
//imagedestroy($im);
//
//
//
//$zip = new ZipArchive;
//$res = $zip->open('test.zip');
//if ($res === TRUE) {
//    print_r($zip->statName('newname.txt'));
//    $zip->close();
//} else {
//    echo 'failed, code:' . $res;
//}
//
//$zip = new ZipArchive;
//$res = $zip->open('test.zip', ZipArchive::CREATE);
//if ($res === TRUE) {
//    $zip->addFromString('index.txt', "some text");
//    $zip->close();
//    echo 'ok';
//} else {
//    echo 'failed';
//}
//
//
//$path = "/temp/text.txt";
//$filename = file_get_contents('img/full_2890_719.jpg');
//
//
//
//$a = file_put_contents($path, $filename);
//
//echo $a;


?>