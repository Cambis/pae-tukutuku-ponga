<?php

declare(strict_types=1);

use Cambis\SilverstripeRector\Set\ValueObject\SilverstripeLevelSetList;
use Cambis\SilverstripeRector\Set\ValueObject\SilverstripeSetList;
use Rector\Config\RectorConfig;
use Rector\Php74\Rector\Closure\ClosureToArrowFunctionRector;
use Rector\Php83\Rector\ClassMethod\AddOverrideAttributeToOverriddenMethodsRector;
use Rector\PHPUnit\Set\PHPUnitSetList;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;

return RectorConfig::configure()
    ->withImportNames()
    ->withPaths([
        __DIR__ . '/app/_config.php',
        __DIR__ . '/app/src',
        __DIR__ . '/app/tests',
    ])->withSets([
        LevelSetList::UP_TO_PHP_83,
        SilverstripeLevelSetList::UP_TO_SILVERSTRIPE_53,
        SetList::CODE_QUALITY,
        SetList::CODING_STYLE,
        SetList::DEAD_CODE,
        SetList::EARLY_RETURN,
        SetList::PRIVATIZATION,
        PHPUnitSetList::PHPUNIT_90,
        PHPUnitSetList::PHPUNIT_CODE_QUALITY,
        SilverstripeSetList::CODE_QUALITY,
    ])->withSkip([
        ClosureToArrowFunctionRector::class,
        AddOverrideAttributeToOverriddenMethodsRector::class => [
            __DIR__ . '/app/src/Page/Model/Page.php',
            __DIR__ . '/app/src/Page/Controller/PageController.php',
        ],
    ]);
