class Solution {

    /**
     * @param String[] $strs
     * @return Integer
     */
    function minDeletionSize($strs) {
        $cnt = count($strs);
        $len = strlen($strs[0]);
        $delCnt = 0;
        
        for($i=0;$i<$len;$i++){
            for($k=0;$k<$cnt;$k++){
                $s[] = $strs[$k][$i];
            }
            if(!$this->isSorted($s)){
                $delCnt++;
            }
            unset($s);
        }
        return $delCnt;
    }
    
    function isSorted($str){
        
        $strClone = $str;
        sort($str,SORT_STRING);
        $ret = $str === $strClone ? true : false;
        return $ret;
    }
}