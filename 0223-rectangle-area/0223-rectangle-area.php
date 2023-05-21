class Solution {

    /**
     * @param Integer $ax1
     * @param Integer $ay1
     * @param Integer $ax2
     * @param Integer $ay2
     * @param Integer $bx1
     * @param Integer $by1
     * @param Integer $bx2
     * @param Integer $by2
     * @return Integer
     */
    function computeArea($ax1, $ay1, $ax2, $ay2, $bx1, $by1, $bx2, $by2) {
        $aHeight = abs($ax1 - $ax2);
        $aWidth = abs($ay1 - $ay2);
        $aBox = $aHeight * $aWidth;
        
        $bHeight = abs($bx1 - $bx2);
        $bWidth = abs($by1 - $by2);
        $bBox = $bHeight * $bWidth;
        
        $abx1 = $ax1 >= $bx1 ? $ax1 : $bx1;
        $aby1 = $ay1 >= $by1 ? $ay1 : $by1;
        $abx2 = $ax2 <= $bx2 ? $ax2 : $bx2;
        $aby2 = $ay2 <= $by2 ? $ay2 : $by2;
        
        $abBox = 0;
        if(($aby1<$aby2)&&($abx1<$abx2)){
            $abHeight = abs($abx1 - $abx2);
            $abWidth = abs($aby1 - $aby2);
            $abBox = $abHeight * $abWidth;
        }
        return $aBox + $bBox - $abBox;
    }
}