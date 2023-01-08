class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight($n) {
        return mb_substr_count(decbin($n),'1');
    }
}