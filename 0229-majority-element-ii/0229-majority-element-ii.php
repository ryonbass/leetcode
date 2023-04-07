class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function majorityElement($nums) {
        $cnt = count($nums);
        $ret = [];
        $numcount = array_count_values($nums);
        foreach($numcount as $key => $value){
            if($value > ($cnt/3)){
                $ret[] = $key;
            }
        }
        return $ret;
    }
}