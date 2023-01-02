class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {           
        $s_split = str_split($s);
        $t_split = str_split($t);
        
        if(count($s_split)!=count($t_split)){
            return false;
        }
        
        sort($s_split,SORT_STRING);
        sort($t_split,SORT_STRING);
        
        if($s_split==$t_split){
            return true;
        }else{
            return false;
        }
        
    }
}