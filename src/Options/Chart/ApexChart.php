<?php

namespace DApexchartsJs\Options\Chart;


class ApexChart
{

    public string $width;
    public string $height;
    /**
     * @type Type
     * @var string
     */
    private string $type;

    public string $foreColor;
    public string $fontFamily;
    public string $background;
    public float $offsetX;
    public float $offsetY;

    public ApexDropShadow $dropShadow;

    public Events $events;


    public Brush $brush;
    public string $id;
    public string $group;

    /**
     * @var ApexLocale[]
     */
    public array $locales;
    public string $defaultLocale;
    public float $parentHeightOffset;
    public bool $redrawOnParentResize;
    public string $redrawOnWindowResize;
    public Sparkline $sparkline;

    public bool $stacked;
    /**
     * @type StackType
     * @var string
     */
    public string $stackType;

    public Toolbar $toolbar;


    public Zoom $zoom;


}
