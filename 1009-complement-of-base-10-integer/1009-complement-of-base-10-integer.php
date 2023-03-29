class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function bitwiseComplement($n) {
        $bin = decbin($n);
        $len = strlen($bin);
        $binrev = decbin(~$n);
       return bindec(substr($binrev,-$len));
        
    }
}