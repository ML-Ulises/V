<?php
    #[AllowDynamicProperties]
    class Product extends DAO {

        public function __construct() {
            $this->keyfield = "id";
            $this->id = 0;
            $this->description = "";
            $this->price=0.0;
            $this->category="";
            $this->brand="";
            $this->image="";
        }

    }
?>
