<?php
class SimpleClass { const CONSTANT_VARIABLE = 'test'; static $staticProperty = 'test'; private $sp8839d9; protected $_protectedProperty; public $publicProperty; private function sp51fa3f() { $spd8dce8 = 'test'; $this->sp8839d9 = $spd8dce8; $this->_protectedProperty = $spd8dce8; $this->publicProperty = $spd8dce8; } protected function _protectedMethod() { $spd8dce8 = 'test'; $this->sp8839d9 = $spd8dce8; $this->_protectedProperty = $spd8dce8; $this->publicProperty = $spd8dce8; } public function publicMethod() { $spd8dce8 = 'test'; $this->sp8839d9 = $spd8dce8; $this->_protectedProperty = $spd8dce8; $this->publicProperty = $spd8dce8; $this->_protectedMethod(); $this->sp51fa3f(); } } $sp5de0e2 = new SimpleClass(); $sp5de0e2->publicMethod();