<?php

use Afeefa\Component\Package\Package\Package;
use Symfony\Component\Filesystem\Path;

return [
    Package::composer()
        ->path(Path::join(getcwd(), '..', 'cli-app')),

    Package::composer()
        ->path(Path::join(getcwd(), '..', 'debug-dump-log')),

    Package::composer()
        ->path(Path::join(getcwd(), '..', 'php-settings')),

    Package::composer()
        ->path(Path::join(getcwd(), '..', 'php-testing-utils')),

    Package::composer()
        ->path(Path::join(getcwd(), '..', 'package-manager'))
];
