class Solution {

    /**
     * @param Integer[] $gifts
     * @param Integer $k
     * @return Integer
     */
    function pickGifts($gifts, $k) {
        for($i=0;$i<$k;$i++){
            $max_gift = max($gifts);
            $square_root = floor(sqrt($max_gift));
            array_splice($gifts,array_search($max_gift,$gifts),1,$square_root);
        }
        return array_sum($gifts);
    }
}