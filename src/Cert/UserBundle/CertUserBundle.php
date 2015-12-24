<?php

namespace Cert\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CertUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
