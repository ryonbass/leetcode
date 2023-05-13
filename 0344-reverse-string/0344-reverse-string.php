class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $len = count($s);
        $copy = $s;
        for($i=0;$i<$len;$i++){
        $s[$i] = $copy[$len-$i-1];
        }
    }
}