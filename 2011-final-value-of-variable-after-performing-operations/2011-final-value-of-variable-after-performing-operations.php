class Solution {

    /**
     * @param String[] $operations
     * @return Integer
     */
    function finalValueAfterOperations($operations) {
        $cnt = 0;
        foreach($operations as $n){
            if(strpos($n,"++")===false){
                $cnt--;
            }else{
                $cnt++;
            }
        }
        return $cnt;
    }
}