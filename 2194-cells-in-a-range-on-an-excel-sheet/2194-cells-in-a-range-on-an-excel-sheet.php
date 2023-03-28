class Solution {

    /**
     * @param String $s
     * @return String[]
     */
    function cellsInRange($s) {
        $alphaList = range('A','Z');
        $num = range(0,25);
        $dict = array_combine($alphaList,$num);
        $dictFlip = array_flip($dict);
        
        for($i=$dict[$s[0]];$i<=$dict[$s[3]];$i++){
            for($j=$s[1];$j<=$s[4];$j++){
                $ans[] = $dictFlip[$i].$j;
            }
        }
        return $ans;
    }
}