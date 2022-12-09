class Solution {

    /**
     * @param String $s
     * @param Integer[] $shifts
     * @return String
     */
    function shiftingLetters($s, $shifts) {
        $ret = "";
        $alpha =["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
        $cnt = count($shifts);
        $move = array_sum($shifts);
        for($i=0;$i<$cnt;$i++){
            $idx = array_search($s[$i],$alpha);
            $str = ($idx + $move) % 26 ;
            $ret .= $alpha[$str];
            $move -= $shifts[$i];
        }
        return $ret;
    }
}