<?php
namespace Drupal\hello\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hello block"),
 * )
 */
class HelloBlock extends BlockBase {
	/**
	 * {@inheritdoc}
	 */
	public function build () {
		return array (
			'#markup' => $this->t('Hello, world!'),
			'#theme'=>'hello
				'
		);
	}
}