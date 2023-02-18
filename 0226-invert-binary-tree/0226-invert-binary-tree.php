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
     * @return TreeNode
     */
    function invertTree($root) {
        if($root==null){
            return null;
        }
        return $this->reverse($root);
    }
    
    function reverse($node){ 
        if(!$node){
            return;
        }
        $left = $node->left;
        $node->left = $node->right;
        $node->right = $left;
        
        if($node->left || $node->right){
            $this->reverse($node->left);
            $this->reverse($node->right);            
        }
        return $node;
    }
}