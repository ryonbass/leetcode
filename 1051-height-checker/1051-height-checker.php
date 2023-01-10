class Solution {

    /**
     * @param Integer[] $heights
     * @return Integer
     */
    function heightChecker($heights) {
        $expected = $heights;
        sort($expected);
        $cnt = count($heights);
        $notMutch = 0;
        for($i=0;$i<$cnt;$i++){
            if($heights[$i]!==$expected[$i]){
                $notMutch++;
            }
        }
        return $notMutch;
    }
}