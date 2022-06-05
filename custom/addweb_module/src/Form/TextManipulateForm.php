<?php
namespace Drupal\addweb_module\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class TextManipulateForm extends ConfigFormBase{

    const SETTINGS = 'addweb_module.setting';

    protected function getEditableConfigNames(){
        return [
            static::SETTINGS
        ];
    }

    public function getFormId()
    {
        return 'textmanipulate_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $config = $this->config(static::SETTINGS);
        $form['text_message'] = [
        '#type' => 'textfield',
        '#title' => $this->t('text message'),
        '#default_value' => $config->get('text_message'),
        '#required' => true
        ];
        return parent::buildForm($form, $form_state);
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $field_value = $form_state->getValues();
        $configField_name = ['text_message'];
        $config = $this->configFactory->getEditable(static::SETTINGS);
        foreach ($configField_name as $field_value) {
            $config->set($field_value, $form_state->getValue($field_value));
        }
        $config->save();
    }
}
?>