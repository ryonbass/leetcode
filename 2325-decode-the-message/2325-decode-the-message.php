class Solution {

    /**
     * @param String $key
     * @param String $message
     * @return String
     */
    function decodeMessage($key, $message) {
        $alpha = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
        $exp = explode(" ",$key);
        $imp = implode($exp);
        $s = str_split($imp);
        $distinct = array_unique($s);
        $k = array_values($distinct);
        $keyidx = array_flip($k);
        $ans = "";
        for($i=0;$i<strlen($message);$i++){
            if($message[$i] === " "){
                $ans .= " ";
                continue;
            }
            $idx = $keyidx[$message[$i]];
            $ans .= $alpha[$idx];
        }
        return $ans;
    }
}