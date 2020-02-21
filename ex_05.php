<?php
class Pangolin {
    private $_name;

    function __construct($_name) {
        $this->_name = $_name;
    }

    public function getName() {
        return $this->_name;
    }

    public function correct($object) {
        $reflection = new ReflectionClass($object);
        if ($reflection->getName() == "Arcaniste"
            && $reflection->implementsInterface("iPerso")) {
            echo "Test 1 : Good !\n";
        } else {
            echo "Test 1 : KO.\n";
        }
        $reflectionParent = $reflection->getParentClass();
        if (!$reflectionParent->isInstantiable()
            && $reflection->isSubclassOf("$reflectionParent")) {
            echo "Test 2 : Good !\n";
        } else {
            echo "Test 2 : KO.\n";
        }
    }
}