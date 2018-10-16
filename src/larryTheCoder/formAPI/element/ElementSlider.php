<?php
/**
 * Adapted from the Wizardry License
 *
 * Copyright (c) 2015-2018 larryTheCoder and contributors
 *
 * Permission is hereby granted to any persons and/or organizations
 * using this software to copy, modify, merge, publish, and distribute it.
 * Said persons and/or organizations are not allowed to use the software or
 * any derivatives of the work for commercial use or any other means to generate
 * income, nor are they allowed to claim this software as their own.
 *
 * The persons and/or organizations are also disallowed from sub-licensing
 * and/or trademarking this software without explicit permission from larryTheCoder.
 *
 * Any persons and/or organizations using this software must disclose their
 * source code and have it publicly available, include this license,
 * provide sufficient credit to the original authors of the project (IE: larryTheCoder),
 * as well as provide a link to the original project.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,FITNESS FOR A PARTICULAR
 * PURPOSE AND NON INFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE
 * USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace larryTheCoder\formAPI\element;


class ElementSlider extends Element {

	private $text = "";
	private $min = 0;
	private $max = 100;
	private $step;
	private $defaultValue;

	public function __construct(String $text, float $min, float $max, int $step, float $defaultValue){
		$this->text = $text;
		$this->min = $min < 0 ? 0 : $min;
		$this->max = $max > $this->min ? $max : $this->min;
		if($step != -1 && $step > 0) $this->step = $step;
		if($defaultValue != -1) $this->defaultValue = $defaultValue;
	}

	/**
	 * @return string
	 */
	public function getText(): string{
		return $this->text;
	}

	/**
	 * @param string $text
	 */
	public function setText(string $text): void{
		$this->text = $text;
	}

	/**
	 * @return float|int
	 */
	public function getMin(){
		return $this->min;
	}

	/**
	 * @param float|int $min
	 */
	public function setMin($min): void{
		$this->min = $min;
	}

	/**
	 * @return float|int
	 */
	public function getMax(){
		return $this->max;
	}

	/**
	 * @param float|int $max
	 */
	public function setMax($max): void{
		$this->max = $max;
	}

	/**
	 * @return int
	 */
	public function getStep(): int{
		return $this->step;
	}

	/**
	 * @param int $step
	 */
	public function setStep(int $step): void{
		$this->step = $step;
	}

	/**
	 * @return float
	 */
	public function getDefaultValue(): float{
		return $this->defaultValue;
	}

	/**
	 * @param float $defaultValue
	 */
	public function setDefaultValue(float $defaultValue): void{
		$this->defaultValue = $defaultValue;
	}
}