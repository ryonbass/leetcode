class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    //外側の四角形⇨内側の四角形の順にループしていく
    function rotate(&$matrix) {
        $len = count($matrix);
        if($len%2==0){
            $loop = $len / 2;
        }else{
            $loop = ($len-1) / 2;
        }
        $len-=1;
        $add=0;
        
        for($i=0;$i<$loop;$i++){ 
             for($j=$add;$j<$len-$add;$j++){
                 $tmp1 = $matrix[$j][$len-$i];//右上→右下までの値を順に保持
                 $tmp2 = $matrix[$len-$i][$len-$j];//右下→左下までの値を順に保持
                 $tmp3 = $matrix[$len-$j][$i];//左下→左上までの値を順に保持
                 $matrix[$j][$len-$i] = $matrix[$i][$j];
                 $matrix[$len-$i][$len-$j] = $tmp1;
                 $matrix[$len-$j][$i] = $tmp2;
                 $matrix[$i][$j] = $tmp3;
             }
            $add++;
        }
    }
}