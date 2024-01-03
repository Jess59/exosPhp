<?php
class A {
    public function method_A() {
        echo "Method A from class A\n";
    }
}

class B {
    public function method_B() {
        echo "Method B from class B\n";
    }
}

class C extends A {
    use B;

    public function method_C() {
        echo "Method C from class C\n";
    }
}

// Example of usage
$c = new C();
$c->method_A(); // Output: Method A from class A
$c->method_B(); // Output: Method B from class B (using trait B)
$c->method_C(); // Output: Method C from class C
?>