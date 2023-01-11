class Solution {

    /**
     * @param String[] $patterns
     * @param String $word
     * @return Integer
     */
    function numOfStrings($patterns, $word) {
        $cnt = count($patterns);
        $match = 0;
        for($i=0;$i<$cnt;$i++){
            if(strpos($word,$patterns[$i])!==false){
                $match++;
            }
        }
        return $match;
    }
}