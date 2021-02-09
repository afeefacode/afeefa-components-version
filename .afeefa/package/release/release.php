<?php

use Afeefa\Component\Package\Package\Package;
use Afeefa\Component\Package\ReleaseManager;
use Webmozart\PathUtil\Path;

return (new ReleaseManager())
    ->packages([
        Package::composer()
            ->path(getcwd()),

        Package::composer()
            ->path(Path::join(getcwd(), '..', 'cli-app')),

        Package::composer()
            ->path(Path::join(getcwd(), '..', 'debug-dump-log')),

        Package::composer()
            ->path(Path::join(getcwd(), '..', 'package-manager'))
    ]);
