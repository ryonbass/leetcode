class Solution {

    /**
     * @param String $text
     * @param String $brokenLetters
     * @return Integer
     */
    function canBeTypedWords($text, $brokenLetters) {
        $strarr = explode(" ",$text);
        $ret = 0;
        if($brokenLetters ==""){
            return count($strarr);
        }
        foreach($strarr as $str){
            if(!strpbrk($str,$brokenLetters)){
                $ret++;
            }
        }
        return $ret;
    }
}