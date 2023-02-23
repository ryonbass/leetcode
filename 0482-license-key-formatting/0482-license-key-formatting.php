class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function licenseKeyFormatting($s, $k) {
        $s  = strtoupper(str_replace('-', '', $s));
        $s = str_split($s);
        $ans = "";
        $groupL = 0;
        for($i = count($s); $i >= 0; $i--){
            $ans = $s[$i] . $ans;
            

            if($groupL == $k && $i != 0){
                $ans = "-" . $ans;
                $groupL = 0;
            }

            $groupL += 1;
        }
        return $ans;
    }
}