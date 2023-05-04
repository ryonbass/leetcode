class Solution {

    /**
     * @param String[] $words
     * @return Integer
     */
    function uniqueMorseRepresentations($words) {
        $morse = [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."];
        $codes = [];
        foreach($words as $w){
            $pattern = "";
            for($i=0;$i<strlen($w);$i++){
                $num = ord($w[$i]) - ord('a');
                $pattern .= $morse[$num];
            }
            if((is_null($codes)) || (!in_array($pattern,$codes))){
                $codes[] = $pattern;
            }
        }
        return count($codes);
    }
}