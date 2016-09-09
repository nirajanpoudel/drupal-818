<?php
namespace Drupal\fax\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @author planningcid026
 * Provides a 'Fax' block
 * 
 * @Block(
 * 	id = "fax_block"
 * 	admin_label = @Translation("Fax block"), 
 * )
 */
class FaxBlock extends BlockBase {
	// Override BlockPluginInterface methods here.
	
	/**
	 * {@inheritdoc}
	 */
	public function build() {
		$config = $this->getConfiguration();
		$fax_number = isset($config['fax_number']) ? $config['fax_number'] : '';
		return array (
			'#markup' => $this->t('The fax number is @number!', array('@number' => $fax_number)),
		);
	}
	
	/**
	 * {@inheritdoc}
	 */
	public function blockSubmit($form, $form_state) {
		// Save our custom setting when the form is submitted.
		$this->setConfigurationValue('fax_number', $form_state->getValue('fax_number'));
	}
	
	/**
	 * {@inheritdoc}
	 */
	public function blockValidate($form, $form_state) {
		$fax_number = $form_state->getValue('fax_number');
		
		if (!is_numeric($fax_number)){
			$form_state->setErrorByName('fax_block_settings', t('Needs to be an interger'));
		}
	}
	
}