<?php
namespace Tailwind\Testing;
class Foo {

    const lower_case_should_be_uppercase = 'bar';
    const ReallyWeShouldBeShouting       = 'plz';

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

        // There should be alignment in the definitions
        // There should be a comma after last array element
        $array = [
            'foo'=>'bar',
            'bazmachine'=>'biz',
            'will'=>'washburn'
        ];

    }

    // Arguments with default values must be at the end argument list
    private function baz($foo,$bar='default',$baz) {

    }
}