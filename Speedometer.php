<?php

class Speedometer
{
    public static float $convert = 1.60934;
    public static int $precision = 2;

    public static function convertKmToMiles(int $km): float
    {
        $invert = (self::$convert);
        return round(($km/$invert),self::$precision).PHP_EOL;
    }

    public static function convertMilesToKm(int $miles): float
    {
        return round(($miles*self::$convert),self::$precision).PHP_EOL;
    }
}

echo Speedometer::convertKmToMiles(10).PHP_EOL;