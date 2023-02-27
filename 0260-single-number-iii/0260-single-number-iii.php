class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function singleNumber($nums) {
        $cnt = count($nums);
        $stack = [];
        for($i=0;$i<$cnt;$i++){
            if(!in_array($nums[$i],$stack)){
                $stack[] = $nums[$i];
                continue;
            }
            array_splice($stack,array_search($nums[$i],$stack),1);
        }
        return $stack;
    }
}