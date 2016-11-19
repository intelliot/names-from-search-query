Get Names from Search Queries
=============================

A bit of PHP code that gets "names" from a "search query."

Given a search query, get a list of all possible two-word (first and last) names, assuming that words can be skipped but cannot be rearranged (reversed).

This code echoes the names rather than storing them. The comments in `names.php` show one way to store the names in an array if desired.

The number of "names" that will be found from a number of words `n` is given by:
```
(n!) / ((n-2)! 2!)
```

Developed with PHP 7.0.11.
