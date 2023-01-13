class Solution {

    /**
     * @param String $paragraph
     * @param String[] $banned
     * @return String
     */
    function mostCommonWord($paragraph, $banned) {
        $p = strtolower($paragraph);
        foreach($banned as $ban){
            $p = preg_replace("/\b{$ban}\b/","",$p);
        }
        $p = preg_replace("/[!?',;.]/"," ",$p);
        $p = preg_replace("/\s+/"," ",$p);
        $p = trim($p);
        $arr = explode(" ",$p);  
        $appearCnt = array_count_values($arr);
        arsort($appearCnt);
        $topAppear = array_keys($appearCnt);
        return $topAppear[0];
    }
}