class Solution {

    /**
     * @param String $columnTitle
     * @return Integer
     */
    function titleToNumber($columnTitle) {
        $abc = ["_","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
        $power = 0;
        $cnt = strlen($columnTitle);
        for($i=1;$i<=$cnt;$i++){
            $str = substr($columnTitle,$cnt-$i,1);
            $num1 = 26**$power;
           $num2 = array_search($str,$abc);
            $nums[] = $num1 * $num2;
            $power++;
            
            }
        return array_sum($nums);
           }
}