class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
        $split = preg_split("/[\s]+/",$s);
        
        for ($i=0;$i<count($split);$i++){
            if($split[$i]=="-"){ //-のみだったら0を返す
                return 0;
            }
            if(preg_match( "/^-[^0-9]+/",$split[$i])){
                return 0;
            }
            if(preg_match( "/^(-|\+)?[0-9]+/",$split[$i])){
                if(preg_match( "/^(-|\+)?[0-9]+[e]/",$split[$i])){
                    $ret = (int)strstr($split[$i],'e',true);
                }else{
                    $ret = (int)$split[$i];
                }
                if(($ret >= -2**31)&&($ret <= 2**31-1)){
                    return $ret;
                }elseif($ret < -2**31){
                    return -2**31;
                }elseif($ret > 2**31-1){
                    return 2**31-1;
                }
            }elseif(preg_match("/^-?[^0-9]+/",$split[$i])){
                return 0;
            }
        }
        return 0;
    }
}