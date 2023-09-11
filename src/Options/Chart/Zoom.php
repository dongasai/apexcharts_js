<?php

namespace DApexchartsJs\Options\Chart;

use DApexchartsJs\Options\Chart\Zoom\ZoomedArea;
use DApexchartsJs\Options\Chart\Zoom\ZoomType;

class zoom
{

    public bool $enabled;

    /**
     * @type ZoomType
     * @var string
     */
    public string $type;

    public bool $autoScaleYaxis;

    public ZoomedArea $zoomedArea;


}
