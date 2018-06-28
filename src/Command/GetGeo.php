<?php namespace Threetwentynine\GeoipPlugin\Command;

use Torann\GeoIP\Facades\GeoIP;
use Illuminate\Http\Request;

/**
 * Class GetGeo
 *
 * @link          http://3twenty9.com/
 * @author        3twenty9 Design, LLC. <support@3twenty9.com>
 * @author        Nick Stanko <nick@3twenty9.com>
 */
class GetGeo
{

    /**
     * The ip identifier.
     *
     * @var mixed
     */
    protected $ip;

    /**
     * Create a new GetGeo instance.
     *
     * @param $identifier
     */
    public function __construct($ip)
    {
        $this->ip = $ip;
    }

    /**
     * Handle the command.
     */
    public function handle(Request $request)
    {
        $ip = $this->ip;
        if (empty($ip))
            $ip = $request->ip();

        return GeoIP($ip);
    }
}
