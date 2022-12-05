class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for($i = 0;$i < count($nums);$i++){
            $partner1 = $target - $nums[$i];
            $partner2 = array_search($partner1,$nums);
            if($partner2!==false && $i!==$partner2){
                return [$i,$partner2];
            }
        }
    }
}