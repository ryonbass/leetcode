class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $merge = array_merge($nums1, $nums2);
        sort($merge);
        if(count($merge)%2 !== 0){
            $idx = (count($merge)-1) / 2;
            return (float)$merge[$idx];
        }else{
            $right = count($merge) / 2;
            $left = $right -1;
            $mid = ($merge[$right] + $merge[$left]) / 2;
            return (float)$mid;
        }
    }
}