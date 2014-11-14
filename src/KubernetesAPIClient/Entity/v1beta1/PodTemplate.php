<?php
/**
 * PHP CLient for Kubernetes API 
 *
 * Copyright 2014 binarygoo Inc. All rights reserved.
 *
 * @author Faruk brbovic <fbrbovic@devstub.com>
 * @link http://www.devstub.com/
 * @copyright 2014 binarygoo / devstub.com
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

namespace DevStub\KubernetesAPIClient\Entity\v1beta1;


use DevStub\KubernetesAPIClient\Entity\BaseEntity;

class PodTemplate extends BaseEntity implements \JsonSerializable {

    protected $desiredState;

    protected $labels;

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\PodState
     */
    public function getDesiredState() {
        return $this->desiredState;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\PodState $desiredState
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\PodState
     */
    public function setDesiredState($desiredState = self::UNIQUE_DEFAULT) {

        if ($desiredState === self::UNIQUE_DEFAULT) {
            $desiredState = new PodState();
            $desiredState->_setEntityCallback([$this,__METHOD__]);
        }
        $this->desiredState = $desiredState;
        return $this->desiredState;
    }

    /**
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\StringArray[string]
     */
    public function getLabels() {
        return $this->labels;
    }

    /**
     * @param \DevStub\KubernetesAPIClient\Entity\v1beta1\StringArray[string] $labels
     *
     * @return \DevStub\KubernetesAPIClient\Entity\v1beta1\StringArray[string]
     */
    public function setLabels($labels = self::UNIQUE_DEFAULT) {
        if ($labels === self::UNIQUE_DEFAULT) {
            $labels = new StringArray();
            $labels->_setEntityCallback([$this,__METHOD__]);
        }
        $this->labels = $labels;
        return $this->labels;
    }

} 