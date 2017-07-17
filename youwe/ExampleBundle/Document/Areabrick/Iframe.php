<?php
/**
 * Created by PhpStorm.
 * User: joris
 * Date: 7/11/17
 * Time: 11:26 PM
 */
namespace youwe\ExampleBundle\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\AbstractTemplateAreabrick;

class Iframe extends AbstractTemplateAreabrick
{
    public function getName()
    {
        return 'IFrame';
    }

    public function getDescription()
    {
        return  'Embed contents from other URL (websites) via iframe';
    }

    /**
     * Here you determ if you use the global or the bundle for the view
     *
     * @return string
     */
    public function getTemplateLocation()
    {
        return static::TEMPLATE_LOCATION_BUNDLE;
    }
}