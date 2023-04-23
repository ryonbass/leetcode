class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes($nums) {
        $imp = implode("",$nums);
        $zeroDel = explode("0",$imp);
        rsort($zeroDel);
        return strlen($zeroDel[0]);
    }
}