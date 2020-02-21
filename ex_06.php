<?php
class Pangolin {
    private $_name;

    function __construct($_name) {
        $this->_name = $_name;
    }

    public function getName() {
        return $this->_name;
    }

    public function correct($my_classes, $namespaces) {
        $is_in = false;
        foreach ($my_classes as $value) {
            $reflection = new ReflectionClass($value);
            $classname = $reflection->getNamespaceName();
            if (!in_array($classname, $namespaces)) {
                $is_in = true;
            }
            if ($is_in = true) {
                echo "Test 0 : KO.\n";
            } else {
                echo "Test 0 : Good !\n";
            }
        }
        if () {
            echo "Test 1 : Good !\n";
        } else {
            echo "Test 1 : KO.\n";
        }
        if () {
            echo "Test 2 : Good !\n";
        } else {
            echo "Test 2 : KO.\n";
        }
    }
}