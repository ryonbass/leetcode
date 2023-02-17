class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $diff
     * @return Integer
     */
    function arithmeticTriplets($nums, $diff) {
        $cnt = count($nums)-2;
        $ans = 0;
        for($i=0;$i<$cnt;$i++){
            if(!in_array($nums[$i]+$diff,$nums)){
                continue;
            }
            if(!in_array($nums[$i]+$diff*2,$nums)){
                continue;
            }
            if(array_search($nums[$i]+$diff,$nums) < $i){
                continue;
            }
            if(array_search($nums[$i]+$diff*2,$nums) < array_search($nums[$i]+$diff,$nums)){
                continue;
            }
        $ans++;
        }
        return $ans;
    }
}