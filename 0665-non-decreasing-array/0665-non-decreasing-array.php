class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function checkPossibility($nums) {
        $nums2 = $nums;
        $sortcheck = $nums;
        sort($sortcheck);
        if($sortcheck===$nums){
            return true;
        }        
        $cnt = count($nums);
        if($cnt===1){
            return true;
        }
        for($i=0;$i<$cnt-1;$i++){
           if($nums[$i]>$nums[$i+1]){
                array_splice($nums,$i,1);
                $rmvstr = array_values($nums);
               break;
            }             
        }
        $tmp = $rmvstr;
        if(isset($tmp)){
            sort($tmp);
        }
        if($rmvstr===$tmp){
            return true;
        }
        
        $cnt2 = count($nums2);
        for($k=0;$k<$cnt2-1;$k++){
           if($nums2[$k]>$nums2[$k+1]){
                array_splice($nums2,$k+1,1);
                $rmvstr2 = array_values($nums2);
               break;
            }             
        }
        $tmp2 = $rmvstr2;
        sort($tmp2);
        if($rmvstr2===$tmp2){
            return true;
        }
        return false;
    }
}