class Solution {

    /**
     * @param String $s
     * @return String
     */
    function repeatedCharacter($s) {
        $stack = [];
        for($i=0;$i<strlen($s);$i++){
            if(in_array($s[$i],$stack)){
                return $s[$i];
            }
            $stack[] = $s[$i];
        }
    }
}