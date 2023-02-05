class Solution {

    /**
     * @param String $jewels
     * @param String $stones
     * @return Integer
     */
    function numJewelsInStones($jewels, $stones) {
        $cntj = strlen($jewels);
        $cnts = strlen($stones);
        $hunt = 0;
        for($i=0;$i<$cntj;$i++){
            for($j=0;$j<$cnts;$j++){
                if($jewels[$i]===$stones[$j]){
                    $hunt++;
                }
            }   
        }
        return $hunt;
    }
}