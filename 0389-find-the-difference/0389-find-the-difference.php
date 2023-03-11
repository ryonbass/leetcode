class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t) {
        if(!isset($s)){
            return $s;
        }
        $s = str_split($s);
        $t = str_split($t);
        sort($s);
        sort($t);
        $i=0;
        while($i<count($t)){
            if($s[$i]!=$t[$i]){
                return $t[$i];
            }
            $i++;
        }
    }
}