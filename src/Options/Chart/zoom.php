<?php

namespace DApexchartsJs\Options\Chart;

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

    /**
     *  enabled?: boolean
    type?: 'x' | 'y' | 'xy'
    autoScaleYaxis?: boolean
    zoomedArea?: {
    fill?: {
    color?: string
    opacity?: float
    }
    stroke?: {
    color?: string
    opacity?: float
    width?: float
    }
    }
     *
     */
}
