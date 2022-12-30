class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function arrangeCoins($n) {
        $row=0;
        $coin = 0;
        while($setcoin<=$n){
            $coin++;
            $setcoin += $coin;
            $row++;
        }
        if($setcoin==$n){
            return $row;
        }else{
            return $row-1;
        }
    }
}