class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function averageValue($nums) {
        $count = count($nums);
        $tmp = 0;
        $tmpCount = 0;
        for($i=0;$i<$count;$i++){
            if($nums[$i] % 6==0){
                $tmp += $nums[$i];
                $tmpCount++;
            }
        }
        if($tmp == 0){
            return 0;
        }
        $result = $tmp / $tmpCount;
        return (int)$result;
    }
}