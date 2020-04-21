<?php
// Tree data structure
class BinaryNode
{
    public $value = null; // node value
    public $left = null; // left child
    public $right = null; // right child

    public function __construct($value) {
        $this->value = $value;
    }
}

class BinaryTree {

    static function invertBinaryTree($root) {
        if($root == null && !($root instanceof BinaryNode)) return null;
        $flag = $root->right;
        $root->right = self::invertBinaryTree($root->left);
        $root->left = self::invertBinaryTree($flag);
        return $root;
    }
}


$root = new BinaryNode(1);

$root->left = new BinaryNode(2);
$root->right = new BinaryNode(3);

$root->left->left = new BinaryNode(4);
$root->left->right = new BinaryNode(5);

$root->right->left = new BinaryNode(6);
$root->right->right = new BinaryNode(7);

print_r(BinaryTree::invertBinaryTree($root));


