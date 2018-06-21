<?php
namespace Tailwind\Testing;
class Foo {

    public function bar($x) {
        // empty statement should trigger an error
        if ($x === 1) {

        }
    }
}