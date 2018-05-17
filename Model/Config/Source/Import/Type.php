<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_Blog
 * @copyright   Copyright (c) 2018 Mageplaza (http://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\Blog\Model\Config\Source\Import;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class Type
 * @package Mageplaza\Blog\Model\Config\Source\Import
 */
class Type implements ArrayInterface
{
    const WORDPRESS = "word_press";
    const AHEADWORK = "ahead_work_m1";
    const MAGEFAN = "mage_fan";

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $options = [];
        foreach ($this->toArray() as $value => $label) {
            $options[] = [
                'value' => $value,
                'label' => $label
            ];
        }

        return $options;
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [
            "" => __('-- Please Select --'),
            self::WORDPRESS => __('Wordpress Blog'),
            self::AHEADWORK => __('AheadWork Blog extension [Magento 1]')
        ];
    }
}