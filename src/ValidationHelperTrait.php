<?php

namespace JadJoubran\ValidationHelper;

trait ValidationHelperTrait{

	public static function validate($request)
	{
		$this->validate($request, $this->rules);
	}

}