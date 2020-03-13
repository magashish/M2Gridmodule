<?php
namespace Kodion\Testimonials\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'kodion_testimonials';

	protected $_cacheTag = 'kodion_testimonials';

	protected $_eventPrefix = 'kodion_testimonials';

	protected function _construct()
	{
		$this->_init('Kodion\Testimonials\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}