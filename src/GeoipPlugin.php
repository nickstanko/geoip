<?php namespace Threetwentynine\GeoipPlugin;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;
use Anomaly\Streams\Platform\Support\Decorator;
use Threetwentynine\GeoipPlugin\Command\GetGeo;

/**
 * Class GeoipPlugin
 *
 * @link          http://3twenty9.com/
 * @author        3twenty9 Design, LLC. <support@3twenty9.com>
 * @author        Nick Stanko <nick@3twenty9.com>
 */
class GeoipPlugin extends Plugin
{
    /**
     * Get the functions.
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction(
                'geoip',
                function ($ip = null) {
                    return (new Decorator())->decorate($this->dispatch(new GetGeo($ip)));
                }
            ),
        ];
    }
}
