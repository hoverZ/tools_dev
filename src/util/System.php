<?php

/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 16/11/3
 * Time: 16:45
 */
namespace BeeChen\hover_tools\src\util;

class System
{
    /**
     * 阿拉伯转中文
     * @param $num
     * @return string
     */
    public static function  toChineseNum($num)
    {
        $char = array("零","一","二","三","四","五","六","七","八","九");
        $dw = array("","十","百","千","万","亿","兆");
        $retval = "";
        $proZero = false;
        for($i = 0;$i < strlen($num);$i++)
        {
            if($i > 0)    $temp = (int)(($num % pow (10,$i+1)) / pow (10,$i));
            else $temp = (int)($num % pow (10,1));

            if($proZero == true && $temp == 0) continue;

            if($temp == 0) $proZero = true;
            else $proZero = false;

            if($proZero)
            {
                if($retval == "") continue;
                $retval = $char[$temp].$retval;
            }
            else $retval = $char[$temp].$dw[$i].$retval;
        }
        if($retval == "一十") $retval = "十";
        return ltrim($retval,"零");
    }

    /**
     * 获取十进制转二进制
     * @param $number
     * @param $obj
     */
    public static function tenToBit($number,&$obj)
    {
        if ($number >= 1) {
            array_unshift($obj, $number % 2);
            self::tenToBit($number / 2, $obj);
        } else {
            return;
        }
    }

    /**
     * 将数组转为 10 进制
     * @param $bit_array [1,0,1,0]
     * @return int       10
     */
    public static function bitArrayToTen($bit_array){
        $total = 0;
        foreach ( $bit_array as $bit){
            $total = $total * 2 + $bit;
        }
        return $total;
    }

}