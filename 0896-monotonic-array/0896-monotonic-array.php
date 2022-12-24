class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function isMonotonic($nums) {
        $cnt = count($nums);
        if($nums[0]<$nums[$cnt-1]){
            for($i=0;$i<$cnt-1;$i++){
                if($nums[$i]>$nums[$i+1]){
                    return false;
                }
            }
            return true;
        }elseif($nums[0]>$nums[$cnt-1]){
            for($j=0;$j<$cnt-1;$j++){
                if($nums[$j]<$nums[$j+1]){
                    return false;
                }
            }
            return true;  
        }else{
            sort($nums);
            if($nums[0]===$nums[$cnt-1]){
                return true;
            }
            return false;
        }
        
    }
}