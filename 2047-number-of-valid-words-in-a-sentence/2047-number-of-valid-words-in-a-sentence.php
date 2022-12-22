class Solution {

    /**
     * @param String $sentence
     * @return Integer
     */
    function countValidWords($sentence) {
        $s = preg_replace("/\s+/"," ",$sentence);
        $token = explode(" ",$s);
        $match = 0;
        foreach($token as $str){
            if(strlen($str)===1){
                if(preg_match("/[a-z\!\.\,]/",$str)===1){
                   $match++; 
                }
            }else{
                if(preg_match("/^[a-z]+(-?[a-z]+|[a-z]*)[\.\,\!]?$/",$str)===1){
                   $match++; 
                }  
            }
        }
        return $match;
    }
}