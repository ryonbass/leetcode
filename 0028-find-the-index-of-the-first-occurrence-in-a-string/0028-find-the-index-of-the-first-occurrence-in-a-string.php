class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $ret = strpos($haystack,$needle);
        return $ret!==false ? $ret : -1 ;
    }
}