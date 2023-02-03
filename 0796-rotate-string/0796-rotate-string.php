class Solution {

    /**
     * @param String $s
     * @param String $goal
     * @return Boolean
     */
    function rotateString($s, $goal) {
        for($i=0;$i<strlen($s);$i++){
            if($s === $goal){
                return true;
            }
            $s .= $s[0];
            $s = substr($s,1);
        }
        return false;
    }
}