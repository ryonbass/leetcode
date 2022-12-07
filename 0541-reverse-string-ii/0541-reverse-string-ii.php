class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function reverseStr($s, $k) {
        if(strlen($s)===1){
            return $s;
        }
        $ret = "";
        $strGroup = str_split($s,$k*2);
        foreach($strGroup as $v){
            if(strlen($v) < $k){
                $ret .= strrev($v);
            }else{
                $strCut = str_split($v,$k);
                $rev = strrev($strCut[0]);
                $ret .= $rev . $strCut[1];    
            }
        }
        return $ret;
    }
}