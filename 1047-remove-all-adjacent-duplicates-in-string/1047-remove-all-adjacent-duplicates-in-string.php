class Solution {

    /**
     * @param String $s
     * @return String
     */
    function removeDuplicates($s) {
        $cnt = strlen($s);
        $stack = [];
        for($i=0;$i<$cnt;$i++){
            if(end($stack)=== $s[$i]){
                array_pop($stack);
                continue;
            }
            $stack[] = $s[$i];
        }
        return implode($stack);
    }
}