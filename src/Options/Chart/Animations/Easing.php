<?php
namespace DApexchartsJs\Options\Chart\Animations;

class Easing extends \DApexchartsJs\helper\EnmuCalss
{
    const linear = 'linear';
    const easein = 'easein';

    const easeout = 'easeout';

    const easeinout = 'easeinout';

    static $list = [
        self::easein, self::linear, self::easeout, self::easeinout
    ];

}
