class Solution {

    /**
     * @param String[] $words
     * @param String $s
     * @return Integer
     */
    function countPrefixes($words, $s) {
        $cnt = count($words);
        $hit =0;
        
        for($i=0;$i<$cnt;$i++){
            if(strpos($s,$words[$i])===0){
                $hit++;
            }
        }
        return $hit;
    }
}