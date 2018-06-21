<?php
namespace Tailwind\Testing;
class Foo {

    public function bar($x) {
        // empty statement should trigger an error
        if ($x === 1) {

        }

        // disallowed functions should be a problem
        ppx('this is for debugging!');

        // count should be used in lieu of sizeof
        $count = sizeof([1,2,3]);
    }
}