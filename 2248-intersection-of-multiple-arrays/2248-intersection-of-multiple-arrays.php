class Solution {

    /**
     * @param Integer[][] $nums
     * @return Integer[]
     */
    function intersection($nums) {
        sort($nums);
        $cnt = count($nums[0]);
        $ans = [];
        
        for($i=0;$i<$cnt;$i++){
            $isExist = true;
            for($j=1;$j<count($nums);$j++){
                $isExist = in_array($nums[0][$i],$nums[$j]);
                if(!$isExist){
                    break;
                }
            }
            if($isExist){
                $ans[] = $nums[0][$i];
            }
        }
        sort($ans);
        return $ans;
    }
}