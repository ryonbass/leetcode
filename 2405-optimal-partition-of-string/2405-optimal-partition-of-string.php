class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function partitionString($s) {
        $len = strlen($s);
        $stack = [];
        $cnt = 0;
        for($i=0;$i<$len;$i++){
            if(!in_array($s[$i],$stack)){
                $stack[] = $s[$i];
                continue;
            }
            unset($stack);
            $stack= [$s[$i]];
            $cnt++;
        }
        if($stack){$cnt++;}
        return $cnt;
    }
}