class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        if(count($nums)<=1){
            return 1;
        }
        
        $length = 1;
        $desideNum = $nums[0];
        $changeIdx =1;
        
        for ($i = 0; $i < count($nums); $i++) {
            if ($desideNum < $nums[$i]) {
                $nums[$changeIdx] = $nums[$i];
                $changeIdx++;
                $length++;
                $desideNum = $nums[$i];
            }
        }
        return $length;
    }
}