class Solution {

    /**
     * @param Integer[] $tasks
     * @return Integer
     */
    function minimumRounds($tasks) {
        $valcnt = array_count_values($tasks);
        if(array_search(1,$valcnt)){
            return -1;
        }
        foreach($valcnt as $k => $v){
            while($v > 0){
                if($v-3 >= 2 || $v-3 === 0){
                    $v -= 3;
                    $work++;
                }else{
                    $v -= 2;
                    $work++;
                }
            }
        }
        return  $work;
    }
}