class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums) {
        $cnt = count($nums);
        $appear = [];
        for($i=1;$i<=$cnt;$i++){
            $ans[] = $i;
        }
        $notAppear = array_diff($ans,$nums);
        return $notAppear;
    }
}