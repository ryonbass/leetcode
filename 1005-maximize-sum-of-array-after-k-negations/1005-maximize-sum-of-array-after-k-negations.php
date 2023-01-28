class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function largestSumAfterKNegations($nums, $k) {
        $minus_count = 0;
        sort($nums);
        foreach($nums as $n){
            $minus_count += $n < 0 ? 1: 0;
        }
        foreach($nums as $num){
            $plus_nums[] = abs($num);
        }
        sort($plus_nums);
        if(!$minus_count){
            $ret = $k % 2 === 0 ? array_sum($nums) : array_sum($nums) - ($nums[0]*2) ;
            return $ret;
        }
        if($minus_count === $k){
            foreach($nums as $v){
                $sum += abs($v);
            }
            return $sum;
        }
        if($minus_count < $k){
            foreach($nums as $v){
                $sum += abs($v);
            }
            if(in_array(0,$nums)){
                return $sum;
            }
            if(($k - $minus_count) === 1){
                return $sum - abs($plus_nums[0])*2;
            }
            $ret = ($k - $minus_count) % 2 === 0 ? $sum : $sum - $plus_nums[0]*2 ;
            return $ret;
        }
        if($minus_count > $k){
            for($i=0;$i<$k;$i++){
                array_splice($nums,$i,1,abs($nums[$i]));
            }
            return array_sum($nums);
        }
    }
}