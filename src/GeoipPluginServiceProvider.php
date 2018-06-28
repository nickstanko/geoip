<?php namespace Threetwentynine\GeoipPlugin;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class GeoipPluginServiceProvider
 *
 * @link          http://3twenty9.com/
 * @author        3twenty9 Design, LLC. <support@3twenty9.com>
 * @author        Nick Stanko <nick@3twenty9.com>
 */
class GeoipPluginServiceProvider extends AddonServiceProvider
{
    /**
     * The addon providers.
     *
     * @var array
     */
    protected $providers = [
        \Torann\GeoIP\GeoIPServiceProvider::class,
    ];

    /**
     * The addon aliases.
     *
     * @var array
     */
    protected $aliases = [
        'GeoIP' => \Torann\GeoIP\Facades\GeoIP::class,
    ];
}
