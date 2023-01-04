class Solution {

    /**
     * @param Integer $n
     * @param Integer[][] $queries
     * @return Integer[]
     */
    function productQueries($n, $queries) {
        $powers = [];
        $ret = [];
        $loop = true;
        
        if($n  == 2){
            $ret[] = $n;
            return $ret;
        }
        
        $pow = 0;
        $k = 0;
        while($loop){
            $num = 2 ** $k; // 2のn乗
            $pow += $num; //  2のn乗を順に足していく
            $powers[] = $num;
            $k++;
            if($n <= $pow){
                 $loop = false; //$nが2のべき乗の和以下になったらLoop解除
            } 
        }    
        
        //整数nと同じになるように配列から値を抜き出す。
        $powers = array_reverse($powers); //降順にする
        $newPowers = [$powers[0]];
        $newPower = $powers[0]; //配列の最大値を設定
        $p = 1;
        while($n != $newPower){
            if($n > $newPower){  //整数以下なら次の値を加算
                 $newPower += $powers[$p];
                if($n >= $newPower){
                    $newPowers[] = $powers[$p];// 整数を超えてなければ値を新配列に保存
                }
                $p++;
            }elseif($n < $newPower){
             $newPower -= $powers[$p-1]; 
            }      
        }
        $newPowers = array_reverse($newPowers); //昇順にする
        
        
        //クエリを計算する
        $mod = 10**9 +7;
        foreach($queries as $query){
            if ($query[0] ==$query[1]){
                $ret[] =  $newPowers[$query[0]];
            }else{
                $sum = 1;
                for($i=$query[0];$i<=$query[1];$i++){
                    $sum *= $newPowers[$i];
                    if($sum >= $mod){
                        $sum = $sum % $mod;
                    }
                }
                $ret[] = $sum;
            }
        }
        return $ret;
    }
}