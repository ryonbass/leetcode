class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfThree($n) {
        if(($n<=0)||($n>2**31-1)){
            return false;
        }
    while($n!=1){
            if($n%3!=0){
                return false;
            }
            $n = $n/3;
        }
        return true;
    }
}