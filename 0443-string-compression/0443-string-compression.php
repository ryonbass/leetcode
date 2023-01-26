class Solution {

    /**
     * @param String[] $chars
     * @return Integer
     */
    function compress(&$chars) {
        $cnt = count($chars);
        $compress_cnt = 1;
        $stack = [];
        if($cnt === 1) return 1;
        
        for($i=0;$i<$cnt;$i++){
            if(end($stack) === $chars[$i]){
                $compress_cnt++;
                $compress_start = $compress_start ?: $i;
                if($i === $cnt-1){
                    array_splice($chars,$compress_start,null,"{$compress_cnt}");
                    break ;
                }
                continue;
            }
            if($compress_cnt >= 2){
                $arr_cnt = 0;
                $compress_end = $i - $compress_start;
                if($compress_cnt >= 10){
                    $arr = str_split("{$compress_cnt}");
                    $arr_cnt = count($arr) -1; 
                    array_splice($chars,$compress_start,$compress_end,$arr);
                }else{
                    array_splice($chars,$compress_start,$compress_end,"{$compress_cnt}");
                }
                $minus_array_cnt = $array_pointer_back = $compress_end - 1 - $arr_cnt;
                $i -= $array_pointer_back;
                $cnt -= $minus_array_cnt ;
            }
            $stack[] = $chars[$i];
            $compress_cnt = 1;
            $compress_start = 0;
        }
        
        if(settype(end($chars),"integer") >= 10){
            $arr = str_split(end($chars));
            array_splice($chars,-1,null,$arr);
        }
        return count($chars);
    }
}