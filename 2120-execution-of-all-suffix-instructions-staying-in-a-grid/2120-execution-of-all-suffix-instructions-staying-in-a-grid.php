class Solution {

    /**
     * @param Integer $n
     * @param Integer[] $startPos
     * @param String $s
     * @return Integer[]
     */
    function executeInstructions($n, $startPos, $s) {
        $reset = $startPos;
        $cnt = 0;
        $ret= [];
        
        for($i=0;$i<strlen($s);$i++){
            $inst = substr($s,$i);
            for($j=0;$j<strlen($inst);$j++){
                if(substr($inst,$j,1)=="R"){
                    $startPos[1] += 1;
                }elseif(substr($inst,$j,1)=="L"){
                    $startPos[1] -= 1;
                }elseif(substr($inst,$j,1)=="D"){
                    $startPos[0] += 1;
                }elseif(substr($inst,$j,1)=="U"){
                    $startPos[0] -= 1;
                }
                
                if(($startPos[1]<$n)&&($startPos[1]>=0)&&($startPos[0]<$n)&&($startPos[0]>=0)){
                  $cnt++;  
                }else{
                    break;
                }
            }
            $ret[] = $cnt;
            $cnt = 0;    
            $startPos = $reset;
        }
        return $ret;
    }
}
