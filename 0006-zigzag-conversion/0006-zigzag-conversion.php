class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        $ret = [];
        $back_flg = false;
        $next = -1;
        $row = -1;
        $len = strlen($s);
        while($len!==$next+1){
            if(!$back_flg){
                $row++;
                $next++; 
                $ret[$row] .= $s[$next];
                if($row===$numRows-1){
                    $back_flg = true;
                }               
            }else{
                $row--;
                $next++;
                $ret[$row] .= $s[$next];
                if($row===0){
                    $back_flg = false;
                }
            }
        }
        $str = implode($ret);
        return $str;
    }
}