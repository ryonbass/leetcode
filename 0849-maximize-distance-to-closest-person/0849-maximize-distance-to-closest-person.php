class Solution {

    /**
     * @param Integer[] $seats
     * @return Integer
     */
    function maxDistToClosest($seats) {
        $top = array_shift($seats);
        $end = array_pop($seats);
        $str = implode($seats);
        $emptyseat = explode("1",$str);
        $cnt = count($emptyseat);
        if($top === 0){
            $left = strlen($emptyseat[0])+1;
        }
        if($end === 0){
            $right = strlen($emptyseat[$cnt-1])+1;
        }
        for($i=0;$i<$cnt;$i++){
            if((!$empty)||($empty < strlen($emptyseat[$i]))){
                $empty = strlen($emptyseat[$i]);
            } 
        }
        if($empty % 2 == 0){
            $sitting = $empty / 2;
        }else{
            $sitting = ($empty + 1) / 2;
        }
        
        if(($left)&&($right)){
            if($left > $right){  
                if($left > $sitting){
                    $sitting = $left;
                }      
            }elseif($left <= $right){
                if($right > $sitting){
                    $sitting = $right;
                }                 
            }
        }elseif(($right)&&($right > $sitting)){
            $sitting = $right;
        }elseif(($left)&&($left > $sitting)){
            $sitting = $left;
        }    
        return  $sitting;
    }
}