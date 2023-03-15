class Solution {

    /**
     * @param String $licensePlate
     * @param String[] $words
     * @return String
     */
    function shortestCompletingWord($licensePlate, $words) {
        $alphaOnly = strtolower(preg_replace("/[^a-zA-Z]/","",$licensePlate));
        $cnt = count($words);

        for($i=0;$i<$cnt;$i++){ 
            $word = $words[$i];
            if(strlen($word)<strlen($alphaOnly)){
                continue;
            }
            for($j=0;$j<strlen($alphaOnly);$j++){
                if(strpos($word,$alphaOnly[$j])===false){
                    $word = null;
                    break;
                }
                $word = preg_replace("/{$alphaOnly[$j]}/","",$word,1);
            }
            if(!is_null($word)){
                $matchWord = $words[$i];
                if(strlen($matchWord) === strlen($alphaOnly)){
                   return $matchWord;
                }
                if(!isset($ans) || strlen($ans) > strlen($matchWord)){
                    $ans = $matchWord;
                }
            }
        }
        return $ans;
    }
}