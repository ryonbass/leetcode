class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function alternateDigitSum($n) {
        $len = strlen($n);
        $arr = str_split($n);
        
        for($i=0;$i<$len;$i++){
            if($i % 2 === 0){
                $total += $arr[$i];
                continue;
            }
            $total -= $arr[$i];
        }
        return $total;
    }
}