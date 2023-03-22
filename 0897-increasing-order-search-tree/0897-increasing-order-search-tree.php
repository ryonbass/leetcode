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
    private $i = 0;
    private $vals = [];
    function increasingBST($root) {
        $ans = new TreeNode(0);
        $this->inoder($root);
        $this->addNode($ans,$this->vals);
        return $ans->right;
    }
    
    function inoder($node){
        if($node===null){
            return;
        }
        $this->inoder($node->left);
        array_push($this->vals,$node->val);
        $this->inoder($node->right);
    }
    
    function addNode($node,$arr){
        if(!isset($arr[$this->i])){
            return ;
        }
        $arr[$this->i];
        $node->right = new TreeNode($arr[$this->i]);
        $this->i++;
        $this->addNode($node->right,$arr);
    }
}