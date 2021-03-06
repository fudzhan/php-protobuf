--TEST--
Protocol Buffers embedded message serialization
--SKIPIF--
<?php require 'skipif.inc' ?>
--FILE--
<?php
require 'test.inc';

$embedded = new Foo();
$embedded->setDoubleField(2.0);

$foo = new Foo();
$foo->setEmbeddedField($embedded);

var_dump($foo->serializeToString());
?>
--EXPECTREGEX--
string\(12\) \"\x8A\x1\x9\x9\x0\x0\x0\x0\x0\x0\x0\x40\"
