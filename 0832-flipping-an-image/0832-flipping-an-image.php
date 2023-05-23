class Solution {

    /**
     * @param Integer[][] $image
     * @return Integer[][]
     */
    function flipAndInvertImage($image) {
        $ret = [];
        for($i=0;$i<count($image);$i++){
            $rev = array_reverse($image[$i]);
            for($k=0;$k<count($rev);$k++){
                if($rev[$k]===1){
                    $rev[$k] = 0;
                }else{
                    $rev[$k] = 1;
                }
            }   
            $ret[] = $rev;
        }
        return  $ret;
    }
}