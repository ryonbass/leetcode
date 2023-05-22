class Solution {

    /**
     * @param Integer[][] $ghosts
     * @param Integer[] $target
     * @return Boolean
     */
    function escapeGhosts($ghosts, $target) {
        $myturn = abs($target[0]) + abs($target[1]);

        $gturn = 0;
        foreach($ghosts as $g){
            $gturn = 0;
                if($g[0] !== $target[0]){
                    if($g[0] > $target[0]){
                        $gturn += abs($target[0] - $g[0]);
                    }else{
                        $gturn += abs($g[0] - $target[0]);
                    }
                }
                if($g[1] !== $target[1]){
                    if($g[1] > $target[1]){
                        $gturn += abs($target[1] - $g[1]);
                    }else{
                        $gturn += abs($g[1] - $target[1]);
                    }
                }
            if((is_null($ghand))||($ghand > $gturn)){
                $ghand = $gturn;
            }
        }
        if($ghand <= $myturn){
            return false;
        }else{
            return true;
        }
    }
}