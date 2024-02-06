<?php

$finder = PhpCsFixer\Finder::create()
    ->ignoreVCSIgnored(true)
    ->in(__DIR__.'/lib')
    ->in(__DIR__.'/tests')
    ->append([__FILE__])
    // Exclude generated files (single files)
    ->notPath('should-be-ignored.php')
;

$config = new PhpCsFixer\Config();
$config->setRules([
    '@PhpCsFixer' => true,
    '@Symfony' => true,
    '@PHP70Migration' => true,
    '@PHP70Migration:risky' => true,
    '@PHP71Migration' => true,
    '@PHP74Migration' => true,
    '@PHP74Migration:risky' => true,
    'heredoc_indentation' => false,
    'declare_strict_types' => false,
    'void_return' => false,
    'array_syntax' => [
        'syntax' => 'short',
    ],
    'method_argument_space' => [
        'on_multiline' => 'ensure_fully_multiline',
    ],
    'general_phpdoc_annotation_remove' => [
        'annotations' => ['version', 'license', 'since'],
    ],
    'phpdoc_no_package' => true,
    'phpdoc_separation' => [
        'groups' => [
            [
                'author',
            ],
            [
                'deprecated',
                'see',
            ],
            [
                'param',
                'return',
                'throws',
            ],
        ],
    ],
])
    ->setRiskyAllowed(true)
    ->setCacheFile('.php-cs-fixer.cache')
    ->setFinder($finder)
;

return $config;
