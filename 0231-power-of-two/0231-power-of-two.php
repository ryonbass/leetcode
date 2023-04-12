class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        for($k=0;$k<32;$k++){
            if($n==2**$k){
                return true;
            }
        }
        return false;
    }
}