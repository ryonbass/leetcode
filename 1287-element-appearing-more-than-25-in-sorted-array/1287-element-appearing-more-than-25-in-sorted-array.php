class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function findSpecialInteger($arr) {
        $cnt = count($arr) *0.25;
        $newarr = array_count_values($arr);
        
        while ($moreappearnum = current($newarr)) {
            if ($moreappearnum > $cnt) {
                $ret = key($newarr);
            }
            next($newarr);
        }
        return $ret;
    }
}