class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function areNumbersAscending($s) {
        $num = preg_replace("/[a-zA-Z]/","",$s);
        $nums = preg_replace("/\s+/"," ",$num);
        $nums = trim($nums);
        $arr = explode(" ",$nums);
        $leftNum = 0;
        foreach($arr as $n){
            if($leftNum >= $n){
                return false;
            }
            $leftNum = $n;
        }
        return true;
    }
}