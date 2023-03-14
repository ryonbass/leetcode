class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function hasAlternatingBits($n) {
        $bin = (string)decbin($n);
        $idx = 1;
        $first = $bin[0];
        while(strlen($bin)>$idx){
            if($bin[$idx]==$first){
                return false;
            }
            $first = $bin[$idx];
            $idx++;
        }
        return true;
    }
}