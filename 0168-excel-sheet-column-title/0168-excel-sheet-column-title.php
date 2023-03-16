class Solution {

    /**
     * @param Integer $columnNumber
     * @return String
     */
    function convertToTitle($columnNumber) {
        $dict = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
        if($columnNumber <= 26){
            return $dict[$columnNumber-1];
        }
        while($columnNumber > 0){
            $columnNumber--;
            if($columnNumber <= 0){
                break;
            }
            if($columnNumber === 26){
                $ret .= "AA";
                break;
            }
            $add = $columnNumber % 26; 
            $columnNumber /= 26;
            $ret .= "".$dict[$add];
        }
        return strrev($ret);
    }
}