class Solution {

    /**
     * @param Integer[] $plants
     * @param Integer $capacity
     * @return Integer
     */
    function wateringPlants($plants, $capacity) {
        $stock = $capacity;
        $step = 0;
        for($i=0;$i<count($plants);$i++){
            if($stock - $plants[$i] >= 0 ){
                 $stock -= $plants[$i];
                $step++; 
            }else{
                $stock = $capacity;
                $stock -= $plants[$i];
                $step = $step + $i*2+1;
             }
        }
        return $step;
    }
}