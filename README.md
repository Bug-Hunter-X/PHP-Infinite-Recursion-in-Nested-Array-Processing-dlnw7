# PHP Infinite Recursion Bug

This repository demonstrates a common error in PHP: infinite recursion in a function designed to process nested arrays.  The `processData` function recursively calls itself to handle nested structures. However, it lacks a proper exit condition for certain input types, leading to a stack overflow error.

## The Bug

The `bug.php` file contains the erroneous code.  The function `processData` will recurse infinitely if it encounters a nested array that does not eventually reach a non-array element.  This is a classic example of forgetting to define a base case in a recursive function.

## The Solution

The `bugSolution.php` file provides a corrected version. The solution adds a check to ensure that the input array contains only scalar values and stops recursion when it hits empty arrays or arrays containing only scalar values.  This prevents the infinite recursion.

## How to Reproduce

1. Clone the repository.
2. Run `bug.php` using a PHP interpreter. You should observe a fatal error indicating a stack overflow.
3. Run `bugSolution.php`. The output should be correctly processed without any error.
