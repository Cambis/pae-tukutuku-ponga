<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer;
use SlevomatCodingStandard\Sniffs\Namespaces\ReferenceUsedNamesOnlySniff;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return ECSConfig::configure()
    ->withPaths([
        __DIR__ . '/app/_config.php',
        __DIR__ . '/app/src',
        __DIR__ . '/app/tests',
    ])
    ->withConfiguredRule(
        ReferenceUsedNamesOnlySniff::class,
        [
            'allowFallbackGlobalFunctions' => false,
            'allowFallbackGlobalConstants' => false,
        ]
    )
    ->withPreparedSets(common: true, psr12: true)
    ->withSkip([
        NotOperatorWithSuccessorSpaceFixer::class,
        ReferenceUsedNamesOnlySniff::class => [
            __DIR__ . '/app/src/Page.php',
            __DIR__ . '/app/src/PageController.php',
        ],
    ]);
