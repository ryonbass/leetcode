class Solution {

    /**
     * @param String[] $dictionary
     * @param String $sentence
     * @return String
     */
    function replaceWords($dictionary, $sentence) {
        
        $sen = explode(" ",$sentence);
        $cntsen = count($sen);
        $cntdic = count($dictionary);
        for($i=0;$i<$cntdic;$i++){
            $sen = preg_replace("/^".$dictionary[$i]."[a-z]*$/",$dictionary[$i],$sen);
        }
        $ans = implode(" ",$sen);
        return $ans;
    }
}