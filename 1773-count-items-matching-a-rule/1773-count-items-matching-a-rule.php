class Solution {

    /**
     * @param String[][] $items
     * @param String $ruleKey
     * @param String $ruleValue
     * @return Integer
     */
    function countMatches($items, $ruleKey, $ruleValue) {
        $ruleIdx=[
        'type' => 0,
        'color' => 1,
        'name' => 2,
        ];
        $cnt = 0;
        
        for($i=0;$i<count($items);$i++){
            if($items[$i][$ruleIdx[$ruleKey]] == $ruleValue){
               $cnt++; 
            }
        }
        return $cnt;
    }
}