<?php

namespace DApexchartsJs\Options\Chart;

use DApexchartsJs\Options\Chart\Toolbar\Export;
use DApexchartsJs\Options\Chart\Toolbar\Tools;

/**
 * 导航栏
 *
 */
class Toolbar
{
    public bool $show;
    public float $offsetX;
    public float $offsetY;
    public Tools $tools;
    public Export $export;


}
