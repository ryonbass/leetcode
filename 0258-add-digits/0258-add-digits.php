class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        if(strlen($num)==1){
            return $num;
        }
        $calc = 0;
        while(strlen($num)>1){
            $calc = 0;
            for($i=0;$i<strlen($num);$i++){
                $n = substr($num,$i,1);
                $calc += $n;   
            }
            $num = $calc;
        }
        return $calc;
    }
}