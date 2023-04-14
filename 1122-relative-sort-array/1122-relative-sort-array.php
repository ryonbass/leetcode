class Solution {

    /**
     * @param Integer[] $arr1
     * @param Integer[] $arr2
     * @return Integer[]
     */
    function relativeSortArray($arr1, $arr2) {
        $cnt = count($arr2);
        for($i=0;$i<$cnt;$i++){
            for($j=0;$j<count($arr1);$j++){
                 if($arr1[$j] ==$arr2[$i]){
                     $retarr[] = $arr1[$j];
                 }
            }
        }
        $partsofarr1 =  array_diff($arr1,$retarr);
        sort($partsofarr1);
        return array_merge($retarr,$partsofarr1);
    }
}