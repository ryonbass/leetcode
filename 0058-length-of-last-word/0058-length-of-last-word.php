class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $rev=strrev($s);
        $ret=explode(" ",$rev);
        $i=0;
        while(strlen($ret[$i])==0){
            $i++;
        }
        return strlen($ret[$i]);
    }
}