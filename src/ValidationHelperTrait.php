<?php

namespace JadJoubran\ValidationHelper;

trait ValidationHelper{

	public function validate($request)
	{
		$this->validate($request, $this->rules);
	}

}