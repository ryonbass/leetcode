class Solution {

    /**
     * @param String $s
     * @return String
     */
    function maskPII($s) {
        $mail = preg_match('/[a-zA-Z]+@[a-zA-Z]+\.[a-zA-Z]+/',$s);
        $tel = preg_match('/[0-9\+\-\)\(\s]/',$s);
        if($mail){
            $s = strtolower($s);
            $m = strstr($s,"@",true);
            $domain = strstr($s,"@");
            $muskd = $m[0]."*****".$m[-1];
            return $muskd.$domain;
        }elseif($tel){
            $num = preg_replace('/[^0-9]/','',$s);
            $lastGroup = substr($num,-4);
            if(strlen($num)===10){
                return "***-***-".$lastGroup;
            }elseif(strlen($num)===11){
                return "+*-***-***-".$lastGroup;
            }elseif(strlen($num)===12){
                return "+**-***-***-".$lastGroup;
            }elseif(strlen($num)===13){
                return "+***-***-***-".$lastGroup;
            }
        }
    }
}