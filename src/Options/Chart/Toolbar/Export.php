<?php

namespace DApexchartsJs\Options\Chart\Toolbar;

class Export
{

    public ExportCvs $cvs;
    public ExportSvg $svg;

    public ExportPng $png;


//     autoSelected?: 'zoom' | 'selection' | 'pan'

    /**
     * @type autoSelected
     * @var string
     */
    public string $autoSelected;
}
