<?php namespace Tailwind\Sniffs\Namespaces;

use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Files\File;

class Tailwind_Sniffs_Namespaces_NamespaceDeclarationSniff  implements Sniff
{
    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return array(T_NAMESPACE);
    }

    /**
     * Processes this test, when one of its tokens is encountered.
     *
     * @param File $phpcsFile
     * @param int                  $stackPtr  The position of the current token in
     *                                        the stack passed in $tokens.
     *
     * @return void
     */
    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        for ( $i = ($stackPtr + 1); $i < ($phpcsFile->numTokens - 1); $i++ ) {
            if ( $tokens[$i]['line'] === $tokens[$stackPtr]['line'] ) {
                continue;
            }

            break;
        }

        // Make sure this Namespace declaration in same line of open tag.
        $prev = $phpcsFile->findPrevious(T_OPEN_TAG, ($stackPtr - 1));
        if ( $tokens[$prev]['line'] !== $tokens[$stackPtr]['line'] ) {
            $error = 'The namespace declaration and open tag must be in same line';
            $phpcsFile->addError($error, $stackPtr, 'SameLine');
        }
    }
}