class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $short = strlen($a) < strlen($b) ? $a : $b ;
        $long = $short === $a ? $b : $a ;
        $short = str_pad($short, strlen($long), "0", STR_PAD_LEFT); 
        $loop = strlen($long);
        $bin_sum = "";
        $up = 0;
        for($i=$loop-1;$i>=0;$i--){
            $sum = (int)$short[$i] + (int)$long[$i] + $up;
            if($sum===0){
               $bin_sum .= "0";
                $up = 0; 
                continue;
            }
            if($sum===1){
                $bin_sum .= "1";
                $up = 0;
                continue;
            }
            if($sum===2){
                $bin_sum .= "0";
                $up = 1;
            }
            if($sum===3){
                $bin_sum .= "1";
                $up = 1;
            }
            if($i===0 && $up!==0){
                $bin_sum .= "1";
            }
        }
        $ans = strrev($bin_sum);
        return $ans;
    }
}