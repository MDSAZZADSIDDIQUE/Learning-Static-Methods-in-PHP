<?php
class Shape
{
    static $height;
    static function calculatePerimeter($height)
    {
        self::$height = $height;
    }
    function calculateArea()
    {
        return self::$height;
    }
}

Shape::calculatePerimeter(0);
