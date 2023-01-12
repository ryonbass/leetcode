class Solution {

    /**
     * @param String[] $words
     * @param Integer $k
     * @return String[]
     */
    function topKFrequent($words, $k) {
        $appearCount = array_count_values($words);
        ksort($appearCount);
        arsort($appearCount);
        $ret = [];
        
        foreach($appearCount as $key => $val){
            if(count($ret)===$k){
                break;
            } 
            $ret[] = $key;
        }
        return $ret;
    }
}