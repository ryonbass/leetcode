class Solution {

    /**
     * @param Integer[] $people
     * @param Integer $limit
     * @return Integer
     */
    function numRescueBoats($people, $limit) {
        sort($people);
        $boatcnt = 0;
        $light = 0;
        $heavy = count($people)-1;
        while($light<=$heavy){
            if($people[$light] + $people[$heavy] <= $limit){
                $light++;
            }
            $heavy--;
            $boatcnt++;
        }
        return $boatcnt;
    }
}