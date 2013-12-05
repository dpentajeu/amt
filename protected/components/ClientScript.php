<?php
class ClientScript extends CClientScript {
	public function renderCoreScripts()
	{
		if ($this->coreScripts === null)
			return;
		$cssFiles = array();
		$jsFiles = array();

		foreach ($this->coreScripts as $name=>$package)
		{
			$baseUrl = $this->getPackageBaseUrl($name);
			if (!empty($package['js']))
			{
				foreach($package['js'] as $js)
					$jsFiles[$baseUrl.'/'.$js]=$baseUrl.'/'.$js;
			}
			if(!empty($package['css']))
			{
				foreach($package['css'] as $css)
				// ######  Commented out the following original line of code ...
				//                                    $cssFiles[$baseUrl.'/'.$css]='';
				// ######  Added from here ...
				{
					if (!is_array($css))
					{
						$cssFiles[$baseUrl.'/'.$css] = '';
					}
					else
					{
						list($cssUrl, $cssParams) = $css;

						$cssFiles[$baseUrl.'/'.trim($cssUrl)] = '';

						if (is_array($cssParams))
						{
							if (isset($cssParams['media']))
							{
								$cssFiles[$baseUrl.'/'.trim($cssUrl)] = trim($cssParams['media']);
							}
						}
					}
				}
				// ######  ... to here :-)
			}
		}
		// merge in place
		if ($cssFiles !== array())
		{
			foreach ($this->cssFiles as $cssFile=>$media)
				$cssFiles[$cssFile]=$media;
			$this->cssFiles=$cssFiles;
		}
		if ($jsFiles !== array())
		{
			if (isset($this->scriptFiles[$this->coreScriptPosition]))
			{
				foreach ($this->scriptFiles[$this->coreScriptPosition] as $url)
					$jsFiles[$url]=$url;
			}
			$this->scriptFiles[$this->coreScriptPosition]=$jsFiles;
		}
	}
}
?>