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
        $banned_map = array_combine($banned,$banned);
        for($add=1;$add<=$n;$add++){
            if($sum+$add > $maxSum){
                break;
            }
            if(isset($banned_map[$add])){
                continue;
            }
            $sum += $add;
            $count++;
        }
        return $count;
    }
}