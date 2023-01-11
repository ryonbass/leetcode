class Solution {

    /**
     * @param Integer[] $fruits
     * @return Integer
     */
    function totalFruit($fruits) {
        $cnt = count($fruits);
        $kindOfFruits = array_unique($fruits);
        
        if(count($kindOfFruits) <= 2){
            return $cnt;
        }
        
        $nextSearchStart = 0;
        $searchEnd = false;
        $maxPick = 0;
        for($i=0;$i<$cnt;$i++){
            $baskets[] = $fruits[$i];
            $stackCnt++;
            for($k=$i+1;$k<$cnt;$k++){
                if($k===$cnt-1){
                    $searchEnd = true;
                }
                if(in_array($fruits[$k],$baskets)){
                    $stackCnt++;
                    continue;
                }
                if(count($baskets)===1){
                    $baskets[] = $fruits[$k];
                    $stackCnt++;
                    $nextSearchStart = $k;
                    continue;
                }
                break;
            }
            
            if($maxPick===0 || $maxPick < $stackCnt){
                $maxPick = $stackCnt;
            }
            unset($baskets);
            $stackCnt = 0;
            $i = $nextSearchStart-1;
            $nextSearchStart = 0;
            
            if($searchEnd){
                break;
            }
        }
        return $maxPick;
    }
}