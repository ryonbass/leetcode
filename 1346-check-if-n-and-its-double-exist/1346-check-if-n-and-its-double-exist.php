class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function checkIfExist($arr) {
        $zerocheck = array_count_values($arr);
        foreach($zerocheck as $key => $val){
            if(($key==0)&&($val>=2)){
                return true;
            }
        }
        
        $bool = true;
        $cnt = count($arr);
        for($i=0;$i<$cnt;$i++){
            for($j=1;$j<=$cnt;$j++){
                if($arr[0] == $arr[$j]){
                    $bool = false;
                }
                if($arr[0] == 2*$arr[$j]){
                    if($arr[0]!=0){
                         return true;
                    }
                }
            }
            $endadd = "";
            $endadd = array_shift($arr);
            array_push($arr,$endadd);
        }
        if(!$bool){
            return false;
        }
    }
}