class Solution {

    /**
     * @param Integer[] $candyType
     * @return Integer
     */
    function distributeCandies($candyType) {
        $getCandy = count($candyType) / 2;
        $uniqueCandyType = array_unique($candyType);
        return $getCandy <= count($uniqueCandyType) ? $getCandy : count($uniqueCandyType);
    }
}