<?php

namespace youwe\ExampleBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

class youweExampleBundle extends AbstractPimcoreBundle
{
    const PUBLIC_PATH = '/bundles/youweexample';

    public function getJsPaths()
    {
        return [self::PUBLIC_PATH.'/js/adminExample.js'];
    }
}
