<?php


    class Model{
            foreach ($fakeSQL as $key => $value) {
                if (property_exists($this, $key)) {
                    $this->$key = $value;
                }
            }
        }
    
    public $objectName = null;
    public $objectId = null;
    public $objectColor = null;

    class Object extends Model{


        function getObjectName()
        {
            return $this->objectName;
        }

        function getObjectId()
        {
            return $this->objectId;
        }

        function getObjectColor()
        {
            return $this->objectColor;
        }
    }
?>