<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/app',
        __DIR__.'/bootstrap',
        __DIR__.'/config',
        __DIR__.'/database',
        __DIR__.'/public',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ])
    // Automatically detect PHP version from composer.json
    ->withPhpSets()

    // Laravel rules based on installed Laravel version
    ->withComposerBased(laravel: true)

    // Start with conservative refactoring levels
    ->withDeadCodeLevel(0)
    ->withCodeQualityLevel(0)
    ->withTypeCoverageLevel(0)

    // Organize and shorten imports
    ->withImportNames();
