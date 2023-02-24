/** 
 * The API guess is defined in the parent class.
 * @param  num   your guess
 * @return 	     -1 if num is higher than the picked number
 *			      1 if num is lower than the picked number
 *               otherwise return 0
 * public function guess($num){}
 */

class Solution extends GuessGame {
    /**
     * @param  Integer  $n
     * @return Integer
     */
    function guessNumber($n) {
        if($n===1){
            return 1;
        }
        $halfNum = ceil($n / 2);
        $max = $n;
        $min = 1;
        while($ans!==0){
            $ans = $this->guess($halfNum);
            if($ans===1){
                $min = $halfNum;
                $halfNum += ceil(($max-$min) / 2);
            }
            if($ans===-1){
                $max = $halfNum;
                $halfNum -= ceil(($max-$min) / 2);
            }
        }
        return $halfNum;
    }
}