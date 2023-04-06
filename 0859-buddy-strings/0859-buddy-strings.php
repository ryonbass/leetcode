class Solution {

    /**
     * @param String $s
     * @param String $goal
     * @return Boolean
     */
    function buddyStrings($s, $goal) {
        if(strlen($s)!==strlen($goal)){
            return false;
        }
        $cnt=0;
        for($i=0;$i<strlen($s);$i++){
            if($s[$i]!==$goal[$i]){
                $a[] = $s[$i];
                $b[] = $goal[$i];
                $cnt++;
                if($cnt>2){
                    return false;
                }
            }
        }
        if($cnt===0){
            $distinct = array_count_values(str_split($s));
            foreach($distinct as $k => $v){
                if($v>=2){
                    return true;
                }
            }
            return false;
        }
        sort($a);
        sort($b);
        return $a===$b ;
    }
}