class Solution {

    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    function checkInclusion($s1, $s2) {
        if(strlen($s) === 1){
            return sttrpos($s2,$s1)!==false ?: false;
        }
        $len1 = strlen($s1);
        $len2 = strlen($s2);
        $arr_s1 = str_split($s1);
        $s1_freq = array_count_values($arr_s1);
        
        for($i=0;$i<$len2-$len1+1;$i++){
            $sub_word = substr($s2,$i,$len1);
            $sub_arr = str_split($sub_word);
            $sub_freq = array_count_values($sub_arr);
            if($s1_freq == $sub_freq){
                return true;
            }
        }
        return false;
    }
}