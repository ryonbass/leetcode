class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canBeIncreasing($nums) {
        $cnt = count($nums);
        for($i=0;$i<$cnt-1;$i++){
            if($nums[$i]<$nums[$i+1]){
                continue;
            }else{
                if($nums[$i+1]<=$nums[$i-1]){
                    array_splice($nums,$i+1,1);
                }else{
                    array_splice($nums,$i,1);
                }
                $removed = array_values($nums);
                break;
            }
        }
        if(is_null($removed)){
            return true;
        }
        for($k=0;$k<$cnt-2;$k++){
            if($removed[$k]<$removed[$k+1]){
                continue;
            }else{
                return false;
            }
        }
        return true;
    }
}