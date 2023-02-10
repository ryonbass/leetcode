class Solution {

    /**
     * @param String[] $words
     * @return String
     */
    function oddString($words) {
        $alpha = str_split('abcdefghijklmnopqrstuvwxyz');
        $isSame = [];
        foreach($words as $word){
            $s = strlen($word);
            $distance = "";
            for($i=0;$i<$s-1;$i++){
                $position1 = array_keys($alpha,$word[$i]);
                $position2 = array_keys($alpha,$word[$i+1]);
                $distance .= $position2[0] - $position1[0].",";
            }
        $isSame[] = $distance;
        }
        $unique_word_idx = array_search(array_keys(array_count_values($isSame),1)[0],$isSame);
        return $words[$unique_word_idx];
    }
}