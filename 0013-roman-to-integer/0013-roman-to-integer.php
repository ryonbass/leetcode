class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $num = 0;
        $arr = str_split($s);
        $arr_int = [];
        for($i = 0; $i < count($arr); $i++){
            switch($arr[$i]){
                case "I":
                    $arr_int[] = 1;
                    break;
                case "V":
                    $arr_int[] = 5;
                    break;
                case "X":
                    $arr_int[] = 10;
                    break;                    
                case "L":
                    $arr_int[] = 50;
                    break;                    
                case "C":
                    $arr_int[] = 100;
                    break;                    
                case "D":
                    $arr_int[] = 500;
                    break;                    
                case "M":
                    $arr_int[] = 1000;
                    break;                    
                default :     
            }
            
            if($i == 0){
                $num += $arr_int[$i];
            }elseif($arr_int[$i-1] < $arr_int[$i]){
                $num += $arr_int[$i] - ($arr_int[$i-1])*2;
            }else{
                $num += $arr_int[$i];
            }
        }
        return $num;
    }
}