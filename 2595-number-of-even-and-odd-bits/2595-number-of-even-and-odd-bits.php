class Solution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function evenOddBit($n) {
        $bin = decbin($n);
        $binArr = str_split(strrev($bin));
        $even = $odd = 0;
        foreach($binArr as $k => $v){
            if($v==1){
                $k%2===0 ? $even++ : $odd++ ;
            }
        }
        return [$even,$odd];
    }
}