class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxK($nums) {
        if(min($nums)>0){
            return -1;
        }
        foreach($nums as $num){
            if(preg_match("/[-]/",$num)){
                $negative_nums[] = preg_replace("/[-]/","",$num);                
            }
        }
        $key = array_intersect($nums,$negative_nums);
        if(empty($key)){
            return -1;
        }
        return max($key);
    }
}