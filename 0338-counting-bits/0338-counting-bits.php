class Solution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function countBits($n) {
        $ret = [];
        for($i=0;$i<=$n;$i++){
            $bin = decbin($i);
            $arr = str_split($bin);
            $ret[] = array_sum($arr);
        }
        return $ret;
    }
}