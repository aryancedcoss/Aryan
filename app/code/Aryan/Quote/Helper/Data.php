<?php
namespace Aryan\Quote\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper 
{
	const XML_PATH_ARYAN_QUOTE = 'sec_quote/';

	public function getConfigValue($field, $storeCode = null)
	{
		return $this->scopeConfig->getValue($field, ScopeInterface::SCOPE_STORE, $storeCode);
	}

	public function getQuoteConfig($fieldid, $storeCode = null)
	{
		return $this->getConfigValue(self::XML_PATH_ARYAN_QUOTE.'quote_text/'.$fieldid, $storeCode);
	}
}
?>
