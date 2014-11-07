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

namespace Binarygoo\KubernetesAPIClient\Entity\v1beta1;


class ContainerStateTerminated extends BaseEntity {

    private $exitCode;

    private $signal;

    private $reason;

    private $startedAt;

    private $finishedAt;

    /**
     * @return int
     */
    public function getExitCode() {
        return $this->exitCode;
    }

    /**
     * @param int $exitCode
     */
    public function setExitCode($exitCode) {
        $this->exitCode = $exitCode;
    }

    /**
     * @return string
     */
    public function getFinishedAt() {
        return $this->finishedAt;
    }

    /**
     * @param string $finishedAt
     */
    public function setFinishedAt($finishedAt) {
        $this->finishedAt = $finishedAt;
    }

    /**
     * @return string
     */
    public function getReason() {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason($reason) {
        $this->reason = $reason;
    }

    /**
     * @return int
     */
    public function getSignal() {
        return $this->signal;
    }

    /**
     * @param int $signal
     */
    public function setSignal($signal) {
        $this->signal = $signal;
    }

    /**
     * @return int
     */
    public function getStartedAt() {
        return $this->startedAt;
    }

    /**
     * @param int $startedAt
     */
    public function setStartedAt($startedAt) {
        $this->startedAt = $startedAt;
    }



} 