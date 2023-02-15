class Solution {

    /**
     * @param Integer[] $num
     * @param Integer $k
     * @return Integer[]
     */
    function addToArrayForm($num, $k) {
        $n = implode($num);
        $short = strlen($n) < strlen($k) ? $n : $k ;
        $long = $short === $n ? $k : $n ;
        $short = str_pad($short, strlen($long), "0", STR_PAD_LEFT); 
        $long = "".$long;
        $loop = strlen($long);
        $total = "";
        $up = 0;
        for($i=$loop-1;$i>=0;$i--){
            $sum = $short[$i] + $long[$i] + $up;
            if($i===0){
                $total .= strrev($sum);
                break;
            }
            if($sum >= 10){
               $total .= ($sum % 10);
                $up = 1; 
                continue;
            }
            $total .= $sum;
            $up = 0;
        }
        $ans = str_split(strrev($total));
        return $ans;
    }
}