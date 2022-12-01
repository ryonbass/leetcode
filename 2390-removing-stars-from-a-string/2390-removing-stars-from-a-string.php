class Solution {

    /**
     * @param String $s
     * @return String
     */
    function removeStars($s) {
        $cnt = strlen($s);
        $stack = [];
        for($i=0;$i<$cnt;$i++){
            if($s[$i]!=="*"){
                $stack[] = $s[$i];
            }else{
                array_pop($stack);
            }
        }
        return implode($stack);
    }
}