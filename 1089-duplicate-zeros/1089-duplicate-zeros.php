class Solution {

    /**
     * @param Integer[] $arr
     * @return NULL
     */
    function duplicateZeros(&$arr) {
        $cnt = count($arr);
        for($i=0+$next;$i<$cnt;$i++){
            if($arr[$i]==0){
                $i++;
                array_pop($arr);
                array_splice($arr,$i,0,0);
            }
        }
    }
}