class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums) {
     foreach($nums as $n){
        $ret[] = abs($n)**2; 
         }
    sort($ret);
    return $ret;
    }
}