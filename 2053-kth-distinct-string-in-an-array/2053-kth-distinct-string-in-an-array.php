class Solution {

    /**
     * @param String[] $arr
     * @param Integer $k
     * @return String
     */
    function kthDistinct($arr, $k) {
        $itemCnt = array_count_values($arr);
        $ret = [];
        foreach($itemCnt as $key => $v){
            if($v===1){
                $ret[] = $key;
            }
        }
        if(!isset($ret[$k-1])){
            return "";
        }
        return $ret[$k-1];
    }
}