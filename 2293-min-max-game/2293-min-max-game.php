class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minMaxGame($nums) {
        if(count($nums)===1){
            return $nums[0];
        }
        $battleArr = array_chunk($nums,2);
        $bool = false;
        while(!$bool){
            for($i=0;$i<count($battleArr);$i++){
                if($i%2===0 || $i===0){
                    if($battleArr[$i][0]<$battleArr[$i][1]){
                        $tmp[] = $battleArr[$i][0];
                    }else{
                        $tmp[] = $battleArr[$i][1];
                    }                    
                }else{
                     if($battleArr[$i][0]<$battleArr[$i][1]){
                        $tmp[] = $battleArr[$i][1];
                    }else{
                        $tmp[] = $battleArr[$i][0];
                    }                    
                }
            }
            unset($battleArr);
            $battleArr = $tmp;
            unset($tmp);
            if(count($battleArr)===1){
                $bool = true;
            }else{
                $battleArr = array_chunk($battleArr,2);
            }            
        }
        return $battleArr[0];
    }
}