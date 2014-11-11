<?php
/**
 * PHP CLient for Kubernetes API 
 *
 * Copyright 2014 binarygoo Inc. All rights reserved.
 *
 * @author Faruk brbovic <fbrbovic@binarygoo.com>
 * @link http://www.binarygoo.com/
 * @copyright 2014 binarygoo
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace Binarygoo\KubernetesAPIClient\Entity;


class BaseEntity  {

    protected $_callback;

    protected $_responseObjectRef;


    /**
     * This method is called after all of the properties are set
     */
    public function end() {
        if ( is_callable($this->_callback)) {
            $params = [$this];
            if ($this->_responseObjectRef !== null) $params[] =& $this->_responseObjectRef;
            call_user_func_array($this->_callback,$params);
        }

        if ($this->_callback !== null && is_array($this->_callback) && isset($this->_callback[0])) {
            return $this->_callback[0];
        }

        return null;
    }

    /**
     * (PHP 5 &gt;= 5.4.0)<br/>
     * Specify data which should be serialized to JSON
     *
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     */
    function jsonSerialize() {
        $toReturn = get_object_vars($this);
        if (isset($toReturn["_callback"])) unset($toReturn["_callback"]);
        if (isset($toReturn["_responseObjectRef"])) unset($toReturn["_responseObjectRef"]);
        foreach ($toReturn as $index => $value) {
            if ($value === null) unset($toReturn[$index]);
        }

        return $toReturn;
    }

    /**
     * Internal reserved method
     *
     * @param null $callback
     */
    public function _setEntityCallback($callback) {
        $this->_callback = $callback;
    }

    /**
     * Internal reserved method
     *
     * @param mixed $responseObjectRef
     */
    public function _setEntityResponseObjectRef(&$responseObjectRef) {
        $this->_responseObjectRef =& $responseObjectRef;
    }


} 