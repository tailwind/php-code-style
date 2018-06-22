<?php namespace Tailwind\Testing;

use Baz, Bar, Bang;
use Fam;
use Zing;
USE Term;

class Foo {

    private     $private_var;
    public  $public_foo;
    protected $protected_baz;

    public function bar($x)
    {

        // We prefer the new [] array syntax
        $array = array(1,2,3);

        // Variable declarations should be on separate lines
        // They should align on the equals
        // There should be correct spacing after the equals
        $x = 1; $y=2; $z = 3;

        // Spacing with operators should be consistent
        // Spacing within parens should be consisten
        // If statements should have brackets and not be on one line
        if ($a&&$b    || $b->isWeird() ) exit;

        // Spacing in cast statements should be consistent
        $foo = ( string) 12;
        $bar=(int )'12';

        // Should be a single space between language constructs
        echo'hi';

        // php constants should be lowercase
        $true = TRUE;
        $false = False;
        $null = NuLl;

        // php array function calls should be lowercase
        $bar = array_MAP($array,function($thing){$thing+1;});

        // There shouldn't be any space before a semicolon
        $foo = 'bar' ;


        // There should be alignment in the definitions
        // There should be a comma after last array element
        $array = [
            'foo'=>'bar',
            'bazmachine'=>'biz',
            'will'=>'washburn'
        ];

        // This should not change
        $STH->execute([
            ':user_id' => $account->user_id
        ]);



    }
    /**
     * This function should be one line below the one above it
     * @return false
     */
    public function hasDomain() {
        $accounts_with_domain = $this->copy() ->filter(function (UserAccount $user_account) {
            if ( $user_account->domains()->count() == 0 ) {
                return false;
            }

            return true;
            });
    }



}




?>




