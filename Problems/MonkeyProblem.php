<?php

Class Problems
{
    function traveltime($monkeyArray, $length)
    {
        // Split the String into Array
        $monkeyArray  = explode(',',str_replace(array('{','}'),'',$monkeyArray));

        $Path = 0;
        for( $i= 0; $i< $length; $i++) {
            for ($j =0; $j< $i; $j++) {
                // Find The Distancelength
                $distnce = ($length - $i + $j) < ($i-$j) ? ( $length - $i + $j) : ( $i - $j);
                // Find Path Length
                $tPath = $monkeyArray[$i] + $monkeyArray[$j] + $distnce;
                // echo "Distance Between trees at "+ $i +" AND "+ $j + " : "+ $distnce;
                // echo "->>". $tPath ." : " + $tPath ;
                // Update The Path Total
                $Path = $tPath >$Path ? $tPath: $Path;
            }

        }
        return $Path;
    }

}

echo   (new Problems)->traveltime('{1,2,3,4}',4);
