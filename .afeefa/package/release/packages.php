<?php

use Afeefa\Component\Package\Package\Package;
use Webmozart\PathUtil\Path;

return [
    Package::composer()
        ->path(Path::join(getcwd(), '..', 'cli-app')),

    Package::composer()
        ->path(Path::join(getcwd(), '..', 'debug-dump-log')),

    Package::composer()
        ->path(Path::join(getcwd(), '..', 'php-settings')),

    Package::composer()
        ->path(Path::join(getcwd(), '..', 'package-manager'))
];
