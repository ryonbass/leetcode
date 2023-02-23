class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function licenseKeyFormatting($s, $k) {
        $dashDel = (preg_replace("/[-]/","",$s));      
        if(strlen($dashDel) === $k){
            return strtoupper($dashDel);
        }
        $add = 0;
        $topLen = strlen($dashDel) % $k;
        $topGroup = substr($dashDel,0,$topLen);
        $OtherGroup = substr($dashDel,$topLen);
        while($add !== strlen($OtherGroup)){
            $ret .= "-".substr($OtherGroup,0+$add,$k);
            $add += $k;
        }
        $ans = strtoupper($topGroup.$ret);
        return strpos($ans,"-")===0 ? substr($ans,1) : $ans;
    }
}