class Solution {

    /**
     * @param Integer[] $costs
     * @param Integer $coins
     * @return Integer
     */
    function maxIceCream($costs, $coins) {
        $cnt = count($costs);
        if(array_sum($costs) <= $coins){
            return $cnt;
        }
        if(min($costs) > $coins){
            return 0;
        }
        sort($costs);
        $buy = 0;
        foreach($costs as $c){
            $coins -= $c;
            if($coins < 0){
                return $buy;
            }
            $buy++;
        }
    }
}