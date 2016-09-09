<?php

namespace Drupal\commissions_and_hearings\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class HumbalBlock extends BlockBase {
	public function build () {
		return array (
			'#markup' => t('Test block'),
			'#description' => 'My description',
		);
	}
}