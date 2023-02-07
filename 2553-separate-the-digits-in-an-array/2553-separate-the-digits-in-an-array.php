class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function separateDigits($nums) {
        $imp = implode($nums);
        return str_split($imp);
    }
}