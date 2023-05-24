class Solution {

    /**
     * @param String $sentence
     * @return Boolean
     */
    function isCircularSentence($sentence) {
        $arr = explode(" ",$sentence);
        $cnt = count($arr);
        if($sentence[0] !== $sentence[-1]){
            return false;
        }
        for($i=0;$i<$cnt-1;$i++){
            $len = strlen($arr[$i]);
            $end = $arr[$i][$len-1];
            if($end !== $arr[$i+1][0]){
                return false;
            }
        }
        return true;
    }
}