class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        foreach($strs as $s){
            $empty = $s==="" ? 0 : 1;
            if($empty){break;}
        }
        if(!$empty){
            return [$strs];
        }
        if(count(array_unique($strs))===1){
            return  [$strs];
        }
        $cnt = count($strs);
        if($cnt === 1){return [$strs];}
        
        foreach($strs as $k => $v){
            $arr = str_split($v);
            sort($arr,SORT_STRING);
            $sortStr = implode($arr);
            $sort_strs[] = $sortStr;
        }
        // $combine_strs = array_combine($strs,$sort_strs);
        $sortStr_unique = array_unique($sort_strs);
        foreach($sortStr_unique as $search_key){
            $idx[] = array_keys($sort_strs,$search_key);
        }
        foreach($idx as $key => $val){
            foreach($val as $ret_key){
                $ret[] = $strs[$ret_key];
            }
            $ans[] = $ret;
            unset($ret);
        }
        
        return $ans;
    }
}