class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        if(strpos($s," ")===false){
            return strrev($s);
        }
        $strarr = explode(" ",$s);
        foreach($strarr as $str){
            $ret[] = strrev($str);
        }
        return implode(" ",$ret);
        
    }
}