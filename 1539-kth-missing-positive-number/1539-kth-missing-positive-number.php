class Solution {

    /**
     * @param Integer[] $arr
     * @param Integer $k
     * @return Integer
     */
    function findKthPositive($arr, $k) {
        $end = end($arr);
        $stack = [];
        for($i=1;$i<$end;$i++){
            if(!in_array($i,$arr)){
                $stack[] = $i;
            }
        }
        if($k > count($stack)){
            return $end + $k - count($stack);
        }
        return $stack[$k-1];
    }
}