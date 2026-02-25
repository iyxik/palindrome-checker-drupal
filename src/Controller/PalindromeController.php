<?php

namespace Drupal\palindrome_checker\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;

/**
 * Returns a palindrome check page.
 */
class PalindromeController extends ControllerBase
{

    public function check(Request $request)
    {
        $text = $request->query->get('text', '');
        $clean = preg_replace('/\W/', '', strtolower($text));
        $is_palindrome = ($clean === strrev($clean)) ? 'Yes' : 'No';

        return [
            '#markup' => $this->t('"%string%" is a palindrome? %result', [
                '%string%' => $text,
                '%result' => $is_palindrome,
            ]),
        ];
    }
}
