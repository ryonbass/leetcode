class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
       $nums1 =  array_slice($nums1,0,$m);
       foreach($nums2 as $num){
           $nums1[] = $num;
       }
        return sort($nums1);
    }
}