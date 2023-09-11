<?php

namespace DApexchartsJs\Options\Chart;

use DApexchartsJs\Options\Chart\Selection\Fill;
use DApexchartsJs\Options\Chart\Selection\Stroke;
use DApexchartsJs\Options\Chart\Selection\Xaxis;
use DApexchartsJs\Options\Chart\Selection\Yaxis;

class Selection
{

    //    enabled?: boolean
    //    type?: string
    public bool $enabled;
    public string $type;
    private Fill $fill;
    private Stroke $stroke;
    private Xaxis $xaxis;
    private Yaxis $yaxis;

}
