class Solution {

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $max = max($candies);
        foreach($candies as $k){
            $ans[] = ($k + $extraCandies) >= $max ;
        }
        return $ans;
    }
}