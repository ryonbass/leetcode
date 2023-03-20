class Solution {

    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n) {
        $cnt = count($flowerbed);
        $plantCnt = 0;
        if($cnt===1 && $flowerbed[0]===0 && $n===1){
            return true;
        }
        for($i=0;$i<$cnt;$i++){
            if($i===0 && $flowerbed[$i]===0 && $flowerbed[$i+1]===0){
                $plantCnt++;
                $i++;
                continue;
            }
            if($i===$cnt-1 && $flowerbed[$cnt-1]===0 && $flowerbed[$cnt-2]===0){
                $plantCnt++;
                break;
            }
            if($flowerbed[$i]===1){
                $i++;
                continue;
            }
            if($flowerbed[$i]===0 && $flowerbed[$i-1]===0 && $flowerbed[$i+1]===0){
                $plantCnt++;
                $i++;
                continue;
            }
        }
        return $n-$plantCnt <= 0 ;
    }
}