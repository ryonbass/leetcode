class Solution {

    /**
     * @param String $s
     * @param String $letter
     * @return Integer
     */
    function percentageLetter($s, $letter) {
        if(strpos($s,$letter)===false){
            return 0;
        }
        $len = strlen($s);
        for($i=0;$i<$len;$i++){
            if($s[$i]===$letter){
                $count++;
            }
        }
        $per = floor($count / $len * 100);
        return $per;
    }
}