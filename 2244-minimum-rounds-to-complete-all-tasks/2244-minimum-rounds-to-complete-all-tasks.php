class Solution {

    /**
     * @param Integer[] $tasks
     * @return Integer
     */
    function minimumRounds($tasks) {
        $eachTaskCnt = array_count_values($tasks);
        if(array_search(1,$eachTaskCnt)){
            return -1;
        }
        foreach($eachTaskCnt as $k => $v){
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