<?php

namespace JadJoubran\ValidationHelper;

trait ValidationHelperTrait{

	public function validate($request)
	{
		$this->validate($request, $this->rules);
	}

}