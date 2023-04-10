class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = [];
        $map = ["}" =>"{",")"=>"(","]"=>"["];
        
        for($i=0;$i<strlen($s);$i++){
            if($s[$i]===")" || $s[$i]==="}" || $s[$i]==="]"){
                if(count($stack)===0){
                    return false;
                }
                if($stack[count($stack)-1] !== $map[$s[$i]]){
                    return false;
                }
                array_pop($stack);
                continue;
            }
            $stack[] = $s[$i];
        }
        return count($stack)==0 ;
    }
}