<?php
class FirstClass { protected $_protectedProperty; public $publicProperty; protected function _protectedMethod() { echo "This is protected method of first class"; } public function publicMethod() { echo "This is public method of first class"; } } class SecondClass extends FirstClass { private $sp8839d9; protected function _protectedMethod() { parent::_protectedMethod(); echo "This is protected method of second class"; $this->sp8839d9 = parent::$_protectedProperty; } public function publicMethod() { parent::publicMethod(); echo "This is public method of second class"; $this->sp8839d9 = parent::$publicProperty; } public static function anotherPublicMethod() { } } class ThirdClass { private $spa36ab6; private static function spe81a11() { } public function __construct(SecondClass $spb91639) { $spb91639->publicMethod(); $spb91639::anotherPublicMethod(); $spb91639->publicProperty = 'test'; } private function sp70ab23() { echo 'test'; } protected function someFunc() { $this->spa36ab6 = 'test'; $this->sp70ab23(); self::spe81a11(); } }