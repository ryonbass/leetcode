class Solution {

    /**
     * @param String[] $word1
     * @param String[] $word2
     * @return Boolean
     */
    function arrayStringsAreEqual($word1, $word2) {
        $str1 = "";
        $str2 = "";
        foreach($word1 as $w1){
            $str1 .= $w1;
        }
        foreach($word2 as $w2){
            $str2 .= $w2;
        }
        if($str1 == $str2){
            return true;
        }else{
            return false;
        }
    }
}