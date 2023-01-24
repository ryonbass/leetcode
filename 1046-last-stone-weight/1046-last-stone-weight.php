class Solution {

    /**
     * @param Integer[] $stones
     * @return Integer
     */
    function lastStoneWeight($stones) {
        while(count($stones) > 1){
            rsort($stones);
            $heaviest_two_stones = array_splice($stones,0,2);
            if($heaviest_two_stones[0]===$heaviest_two_stones[1]){
                continue;
            }else{
                $stones[] = $heaviest_two_stones[0] - $heaviest_two_stones[1];
            }
        }
        return $stones[0] ?? 0;
    }
}