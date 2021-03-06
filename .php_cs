<?php

$fixers = [
    '-psr0',
    '-yoda_conditions',
    'align_double_arrow',
    'multiline_spaces_before_semicolon',
    'ordered_use',
    'short_array_syntax',
];

return Symfony\CS\Config\Config::create()->fixers($fixers)
    ->finder(Symfony\CS\Finder\DefaultFinder::create()->in(__DIR__));
