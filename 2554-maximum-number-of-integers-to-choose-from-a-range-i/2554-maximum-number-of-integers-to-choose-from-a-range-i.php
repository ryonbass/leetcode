class Solution {

    /**
     * @param Integer[] $banned
     * @param Integer $n
     * @param Integer $maxSum
     * @return Integer
     */
    function maxCount($banned, $n, $maxSum) {
        $sum = 0;
        $count = 0;
        for($add=1;$add<=$n;$add++){
            if($sum+$add > $maxSum){
                break;
            }
            if(in_array($add,$banned)){
                continue;
            }
            $sum += $add;
            $count++;
        }
        return $count;
    }
}