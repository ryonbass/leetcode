class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function digitSum($s, $k) {
        if(strlen($s)<=$k){
            return $s;
        }
        while(strlen($s)>$k){
            $group = str_split($s,$k);
            for($i=0;$i<count($group);$i++){
                if(strlen($group[$i])===1){
                    $total .= (string)$group[$i];
                    break;
                }
                $sum = array_sum(str_split($group[$i]));
                $total .= (string)$sum;
            }
            $s = $total;
            unset($total);
        }
        return $s;
    }
}