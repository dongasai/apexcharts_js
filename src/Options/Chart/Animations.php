<?php

namespace DApexchartsJs\Options\Chart;

use DApexchartsJs\Options\Chart\Animations\AnimateGradually;
use DApexchartsJs\Options\Chart\Animations\DynamicAnimation;
use DApexchartsJs\Options\Chart\Animations\Easing;

class Animations
{
    public bool $enabled;

    /**
     * @type Easing
     * @var string
     */
    public string $easing;

    /**
     * @var float
     */
    public float $speed;

    private AnimateGradually $animateGradually;
    private DynamicAnimation $dynamicAnimation;

}
