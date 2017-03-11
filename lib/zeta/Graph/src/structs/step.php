<?php
/**
 * File containing the ezcGraphAxisStep struct
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 * 
 *   http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @package Graph
 * @version //autogentag//
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
/**
 * Represents a single step on the axis
 *
 * Struct class containg information for single steps in the axis. A step may
 * have child steps, which are commonly known as major (bigger) and minor
 * (smaller) steps on axis.
 *
 * The positions of multiple steps in an array generated by the
 * ezcGraphChartElementAxis classes is not always distributed evenly.
 *
 * @version //autogentag//
 * @package Graph
 */
class ezcGraphAxisStep
{
    /**
     * Position of step on one axis.
     * 
     * @var float
     */
    public $position = 0;

    /**
     * Size of step
     * 
     * @var float
     */
    public $width = 0;

    /**
     * Steps label 
     * 
     * @var string
     */
    public $label = false;

    /**
     * Childrens of step 
     * 
     * @var array(ezcGraphAxisStep)
     */
    public $childs = array();

    /**
     * True if the step is at the same position as the other axis
     * 
     * @var bool
     */
    public $isZero = false;

    /**
     * True if this step is the last one
     * 
     * @var bool
     */
    public $isLast = false;

    /**
     * Simple constructor
     *
     * @param float $position 
     * @param float $width 
     * @param string $label 
     * @param array $childs 
     * @param bool $isZero 
     * @param bool $isLast 
     * @ignore
     */
    public function __construct( $position = .0, $width = .0, $label = null, array $childs = array(), $isZero = false, $isLast = false )
    {
        $this->position = (float) $position;
        $this->width = (float) $width;
        $this->label = $label;
        $this->childs = $childs;
        $this->isZero = (bool) $isZero;
        $this->isLast = (bool) $isLast;
    }

    /**
     * __set_state 
     * 
     * @param array $properties Struct properties
     * @return void
     * @ignore
     */
    public function __set_state( array $properties )
    {
        $this->position = $properties['position'];
        $this->width = $properties['width'];
        $this->label = $properties['label'];
        $this->childs = $properties['childs'];
        $this->isZero = $properties['isZero'];
        $this->isLast = $properties['isLast'];
    }
}

?>
