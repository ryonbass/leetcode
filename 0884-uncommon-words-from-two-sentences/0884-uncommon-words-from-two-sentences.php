class Solution {

    /**
     * @param String $s1
     * @param String $s2
     * @return String[]
     */
    function uncommonFromSentences($s1, $s2) {
        $merge_s = $s1 ." ".$s2;
        $words = explode(" ",$merge_s);
        $distinct = array_count_values($words);
        asort($distinct);
        $unique_word = [];
        
        foreach($distinct as $k => $v){
            if($v > 1) break;
            $unique_word[] = $k;
        }
        return $unique_word;
    }
}