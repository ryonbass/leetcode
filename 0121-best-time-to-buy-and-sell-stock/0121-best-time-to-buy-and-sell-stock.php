class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $maxProfit = 0;
        $cnt = count($prices);

        for($i=0;$i<$cnt;$i++){
            if(!isset($min) || $min > $prices[$i]){
                $min = $prices[$i];
            }
            $profit = $prices[$i] - $min;
            if($maxProfit < $profit){
                $maxProfit = $profit;
            }
        }
        return $maxProfit;
    }
}