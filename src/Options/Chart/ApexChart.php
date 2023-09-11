<?php

namespace DApexchartsJs\Options\Chart;


use DApexchartsJs\helper\Options;

class ApexChart extends Options
{

    public string $width;

    public string $height;

    /**
     * @type Type
     * @var string
     */
    public Type $type;

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
    /**
     *
     * @var Sparkline
     */
    protected Sparkline $sparkline;

    public bool $stacked;

    /**
     * @type StackType
     * @var string
     */
    protected string $stackType;

    /**
     * 定义枚举类
     * @var string
     */
    static $stackType_ENMU = StackType::class;


    protected Toolbar $toolbar;


    protected Zoom $zoom;


    /**
     * @return Sparkline
     */
    public function getSparkline(): Sparkline
    {
        if (!isset($this->sparkline)) {
            $this->sparkline = new Sparkline();
        }
//        dump($this->sparkline);
        return $this->sparkline;
    }

    /**
     * @return ApexDropShadow
     */
    public function getDropShadow(): ApexDropShadow
    {
        if (!isset($this->dropShadow)) {
            $this->dropShadow = new ApexDropShadow();
        }
        return $this->dropShadow;
    }

    /**
     * @return Brush
     */
    public function getBrush(): Brush
    {
        if (!isset($this->brush)) {
            $this->brush = new Brush();
        }
        return $this->brush;
    }

    /**
     * @return string
     */
    public function getStackType(): string
    {
        return $this->stackType;
    }

    /**
     * @param string $stackType
     */
    public function setStackType( $stackType): void
    {
        if (!StackType::isValid($stackType)) {
            throw new \Exception(" stackType not in list");
        }

        $this->stackType = $stackType;
    }


    /**
     * 设置类型
     * @param string $type
     */
    public function setType( $type): void
    {
        dump($type);
        if (!Type::isValidKey($type)) {
            throw new \Exception("type not in list");
        }

        $this->type = $type;
    }


}

