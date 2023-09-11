<?php

namespace DApexchartsJs\Options;

class ApexOptions
{

    public ApexAnnotations $annotations;
    public ApexChart $chart;
    public $colors;
    public ApexDataLabels $dataLabels;
    public ApexFill $fill;
    public ApexForecastDataPoints $forecastDataPoints;
    public ApexGrid $grid;
    public string $labels;
    public ApexLegend $legend;
    public ApexMarkers $markers;
    public ApexNoData $noData;
    public ApexPlotOptions $plotOptions;
    public ApexResponsive $responsive;
    /**
     * @var ApexAxisChartSeries|ApexNonAxisChartSeries
     */
    public ApexNonAxisChartSeries $series;
    public ApexStates $states;
    public ApexStroke $stroke;
    public ApexTitleSubtitle $subtitle;
    public ApexTheme $theme;
    public ApexTitleSubtitle $title;
    public ApexTooltip $tooltip;
    public ApexXAxis $xaxis;
    /**
     * @var ApexYAxis | ApexYAxis[]
     */
    public $yaxis;

}
