class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return Integer
     */
    function repeatedStringMatch($a, $b) {
        if($b === ""){
            return 0;
        }
        $cnt = 1;
        $repeat = $a;
        while(strpos($a,$b)===false){
            if($cnt!==1){
                if(strlen($b)*2 < strlen($a)){
                    return -1;
                }
            }
            $a .= $repeat;
            $cnt++;
        }
        return $cnt;
    }
}