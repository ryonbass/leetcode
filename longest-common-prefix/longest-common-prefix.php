class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $mostShortStr = null;
        for($i=0;$i<count($strs);$i++){
            if((is_null($mostShortStr))||(strlen($mostShortStr) > strlen($strs[$i]))){
                $mostShortStr = $strs[$i];
            }
        }

        $check="";
        $ret="";
        for($k=0;$k<strlen($mostShortStr);$k++){
            $check = substr($mostShortStr,$k,1);

            for($j=0;$j<count($strs);$j++){
                if(substr($strs[$j],$k,1)!==$check){
                    if($k==0){
                        return "";
                    }else{
                        return $ret;
                    }
                }
            }
            $ret = $ret . $check;
        }
        return $ret;
    }
}