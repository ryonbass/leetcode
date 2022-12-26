class Solution {

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s) {
        $pat = str_split($pattern,1);
        $str = explode(" ",$s);
        $cnt = count($pat);
        $cntstr = count($str);
        $is_match = [];
        
        $a = count(array_count_values($str));
        $b = count(array_count_values($pat));
        if($a!==$b){
            return false;
        }
        if($cnt!==$cntstr){
            return false;
        }
        for($i=0;$i<$cnt;$i++){
            if(empty($is_match[$pat[$i]])){
                $is_match[$pat[$i]] = $str[$i];
            }else{
                if($is_match[$pat[$i]] !== $str[$i]){
                    return false;
                }
            }
        }
        return true;
    }
}