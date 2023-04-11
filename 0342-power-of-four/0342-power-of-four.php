class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfFour($n) {
        for($i=0;$i<31;$i++){
            if($n == 4**$i){
                return true;
            }
        }
        return false;
    }
}