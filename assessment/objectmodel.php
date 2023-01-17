<?php

        

    class ObjectO{
        public $objectId;
        public $objectColor;
        public $objectName;
        
        
        function setObjectName($objectName){
            $this->objectName = $objectName;
        }
        function getObjectName()
        {
            return $this->objectName;
        }

        function setObjectId($objectId){
            $this->objectId = $objectId;
        }
        function getObjectId()
        {
            return $this->objectId;
        }

        function setObjectColor($objectColor){
            $this->objectColor = $objectColor;
        }
        function getObjectColor()
        {
            return $this->objectColor;
        }

    }

    class ObjectList{
        public $objectList;

        function setObjectList($objectList){
            $this->objectList = $objectList;
        }
        function getObjectList()
        {
            return $this->objectList;
        }
    }

    

?>