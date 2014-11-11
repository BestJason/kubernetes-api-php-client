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

namespace Binarygoo\KubernetesAPIClient;


interface IConfig {


    public function setAPINodeUrl($path);

    public function getAPINodeUrl();

    public function setAPIVersion($version);

    public function getAPIVersion();

    public function getAuthType();

    public function setAuthType($authType);

    public function getAuthOptions();

    public function setAuthOptions($options);

    public function getConnectionAdapter();

    public function setConnectionAdapter($connectionAdapter);

    public function getSslVerify();

    public function setSslVerify($sslVerify);

} 