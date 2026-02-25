# Palindrome Checker (Drupal 11 Module)

A simple custom module for Drupal 11 that checks whether a given string is a palindrome.

## Features

- Custom Drupal module  
- Implements `hook_help()`  
- Simple route to check palindromes via URL  

## Installation

1. Copy the module into:  
   `web/modules/custom/palindrome_checker`

2. Enable the module:

   lando drush en palindrome_checker -y  
   lando drush cr  

3. Visit:

   /palindrome-check?text=level  

