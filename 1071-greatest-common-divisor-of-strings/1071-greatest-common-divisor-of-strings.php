class Solution {

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcdOfStrings($str1, $str2) {
        if(strlen($str1) <= strlen($str2)){
            $short = $str1;
            $long = $str2;
        }else{
            $short = $str2;
            $long = $str1;            
        }
        if(strpos($long,$short)===false){
            return "";
        }
        $small = strlen($short);
        $big = strlen($long); 
        $mergelen = $small + $big;
        $divisor = 0;
        while(!$divisor){
            $diff = $big - $small;
            if($diff < $small){
                $big = $small;
                $small = $diff;               
            }else{
                $big = $diff;               
            }
            $divisor = $diff===0 ? $big : 0;
        }
        $parts = substr($short,0,$divisor);
        $mergestr = $short . $long;
        $arr = str_split($mergestr,$divisor);
        $is_unique = array_unique($arr);
        if(count($is_unique) === 1){
            return $parts;
        }
        return "";
    }
}