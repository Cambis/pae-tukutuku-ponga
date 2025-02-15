<?php

declare(strict_types=1);

use Cambis\SilverstripeRector\Set\ValueObject\SilverstripeLevelSetList;
use Cambis\SilverstripeRector\Set\ValueObject\SilverstripeSetList;
use Rector\Config\RectorConfig;
use Rector\Php74\Rector\Closure\ClosureToArrowFunctionRector;
use Rector\Php83\Rector\ClassMethod\AddOverrideAttributeToOverriddenMethodsRector;

return RectorConfig::configure()
    ->withImportNames()
    ->withPaths([
        __DIR__ . '/app/_config.php',
        __DIR__ . '/app/src',
        __DIR__ . '/app/tests',
    ])
    ->withPhpSets()
    ->withPreparedSets(
        codeQuality: true,
        codingStyle: true,
        deadCode: true,
        earlyReturn: true,
        phpunit: true,
        phpunitCodeQuality: true,
        privatization: true
    )
    ->withSets([
        SilverstripeLevelSetList::UP_TO_SILVERSTRIPE_53,
        SilverstripeSetList::CODE_QUALITY,
    ])->withSkip([
        ClosureToArrowFunctionRector::class,
        AddOverrideAttributeToOverriddenMethodsRector::class => [
            __DIR__ . '/app/src/Page.php',
            __DIR__ . '/app/src/PageController.php',
        ],
    ]);
