class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2) {
        $cnt = 0;
        $ans = "";
        while(isset($word1[$cnt]) && isset($word2[$cnt])){
            $ans .= $word1[$cnt] . $word2[$cnt];
            $cnt++;
        }
        $ans .= isset($word1[$cnt]) ? substr($word1,$cnt) : substr($word2,$cnt);
        return $ans;
    }
}