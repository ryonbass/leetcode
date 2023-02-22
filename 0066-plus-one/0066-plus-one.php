class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $len = count($digits);
        
        if($digits[$len-1] != 9){ 
            $digits[$len-1] += 1;
            return $digits;
        }
            
        for($i=1;$i<=$len;$i++){
            if($digits[$len-$i] == 9){
                $digits[$len-$i] = 0;
                
                if($len-$i == 0){
                    array_unshift($digits,1);
                    return $digits;
                }
                continue; 
            }else{
                $digits[$len-$i] += 1;
                return $digits; 
            }
        }
    }
}