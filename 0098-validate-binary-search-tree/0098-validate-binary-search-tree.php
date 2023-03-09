/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isValidBST($root, $left = null, $right = null) {
        if ($root === null){
            return true;
        }
        if ($left !== null && $root->val <= $left->val){
            return false;
        } 
        if ($right !== null && $root->val >= $right->val){
            return false;
        }
        return $this->isValidBST($root->left, $left, $root) && $this->isValidBST($root->right, $root, $right);
    }
}