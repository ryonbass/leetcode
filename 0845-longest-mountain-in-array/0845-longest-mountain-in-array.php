class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function longestMountain($arr) {
        $cnt = count($arr);
        $mt = 0;
        if($cnt < 3){
            return 0;
        }
        for($i=0;$i<$cnt-1;$i++){
            $len = 0;
            while($arr[$i]<$arr[$i+1]){
                $i++;
                $len++;
            }
            if(($len!==0)&&(!is_null($arr[$i+1]))&&($arr[$i]>$arr[$i+1])){  
                while(($arr[$i]>$arr[$i+1]&&(!is_null($arr[$i+1])))){
                    $i++;
                    $len++;
                }
                $i--;
                $len++;
            }else{
                $len = 0;
            }
            if($mt < $len){
                $mt = $len;
            }
        }
        return $mt;
    }
}