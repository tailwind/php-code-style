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


        /// We prefer the [] array syntax
        $array = array(1,2,3);

        // Variable declarations should be on separate lines
        $x = 1; $y=2; $z = 3;
    }
}