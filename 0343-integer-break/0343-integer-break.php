class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function integerBreak($n) {
        if($n===2){
            return 1;
        }
        if($n===3){
            return 2;
        }
        $pow = 1;
        while($n > 4){
            $n -= 3;
            $pow *= 3;
        }
        $ans = $pow * $n;
        return $ans;
    }
}