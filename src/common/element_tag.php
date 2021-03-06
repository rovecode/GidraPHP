<?php

class ElementTag extends Paint {
    public function __construct(
        public String $name,
        public String|Null $value = null,
    ) {
        
    }

    public function paint() : String {
        assert($this->value !== null);
        return $this->name.'='.'"'.$this->value.'"';
    }
}