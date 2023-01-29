class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function alternateDigitSum($n) {
        $len = strlen($n);
        $arr = str_split($n);
        
        for($i=0;$i<$len;$i++){
            $total = $i % 2 === 0 ? $total+$arr[$i] : $total-$arr[$i];
        }
        return $total;
    }
}