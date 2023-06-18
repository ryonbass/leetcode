class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function unequalTriplets($nums) {
        if(count(array_unique($nums))<3){
            return 0;
        }
        $cnt = 0;
        for($i=0;$i<count($nums)-2;$i++){
            $stack = [];
            if(!in_array($nums[$i],$stack)){
                $stack[] = $nums[$i];
            }
            for($j=$i+1;$j<count($nums)-1;$j++){
                if(!in_array($nums[$j],$stack)){
                    $stack[] = $nums[$j];
                    for($k=$j+1;$k<count($nums);$k++){
                        if(!in_array($nums[$k],$stack)){
                            $cnt++;
                        }
                    }
                    array_pop($stack);
                }
            }
        }
        return $cnt;
    }
}