class Solution {

    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board) {
        for($i=0;$i<9;$i++){
            $column = [];
            $row = [];
            for($j=0;$j<9;$j++){
                if((int)$board[$j][$i]>=1){
                    if(in_array((int)$board[$j][$i],$column)){
                        return false;
                    }
                    $column[] = (int)$board[$j][$i];
                }
                if((int)$board[$i][$j]>=1){
                    if(in_array((int)$board[$i][$j],$row)){
                        return false;
                    }
                    $row[] = (int)$board[$i][$j];
                }
            }
            unset($column);
            unset($row);
        }
        if(!$this->subBoxes($board)){
            return false;
        }
        return true;
    }
    
    function subBoxes($b){
        $sub1=$sub2=$sub3=$sub4=$sub5=$sub6=$sub7=$sub8=$sub9=[];
        for($k=0;$k<9;$k++){
            for($g=0;$g<3;$g++){
                array_push(${"sub".$k+1},$b[$g+$k][0],$b[$g+$k][1],$b[$g+$k][2]);
                array_push(${"sub".$k+2},$b[$g+$k][3],$b[$g+$k][4],$b[$g+$k][5]);
                array_push(${"sub".$k+3},$b[$g+$k][6],$b[$g+$k][7],$b[$g+$k][8]);
            }
            $k += 2;
        }
        for($v=0;$v<9;$v++){
            $subBox = [];
            for($a=0;$a<9;$a++){
                if((int)${"sub".$v+1}[$a]>=1){
                    if(in_array((int)${"sub".$v+1}[$a],$subBox)){
                        return false;
                    }
                    $subBox[] = (int)${"sub".$v+1}[$a];
                }
            }
            unset($subBox);
        }
        return true;
    }
}