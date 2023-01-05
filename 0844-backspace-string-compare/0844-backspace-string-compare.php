class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function backspaceCompare($s, $t) {
        $slen = strlen($s);
        $tlen = strlen($t);
        $sstack = [];
        $tstack = [];
        for($i=0;$i<$slen;$i++){
            if($s[$i] !== '#'){
                $sstack[] = $s[$i];
            }else{
                if(isset($sstack)){
                    array_pop($sstack);
                }
            }
        }
        for($k=0;$k<$tlen;$k++){
            if($t[$k] !== '#'){
                $tstack[] = $t[$k];
            }else{
                if(isset($tstack)){
                    array_pop($tstack);
                }
            }
        }
        $sstack===$tstack ? $ret=true : $ret=false;
        return $ret;
    }
}