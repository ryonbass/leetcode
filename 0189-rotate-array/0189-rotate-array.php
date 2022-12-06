class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        // for($i=0;$i<$k;$i++){
        //     $n = array_reverse($nums);
        //     array_unshift($nums,$n[0]);
        //     array_splice($nums,-1);
        //     }
        
        $len = count($nums);
        if($k % $len == 0){
            return;    
        }else if($k > $len){
            $k =  $k % $len;
        }
    
        $ret = [];
        for($i=0;$i<$k;$i++){
            $ret[] = $nums[$len-$k+$i];
        }
        $moveRight = $len-$k;
        for($i=0;$i<$moveRight;$i++){
            $ret[] = $nums[$i];
        }
        $nums = $ret; 
    }
}