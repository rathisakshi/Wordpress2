<?php
/**
 * Real Home Theme Customizer Property Builder settings
 *
 * @package Aarambha_Real_Estate
 */

class Aarambha_Real_Estate_Customize_Global_Property_Builder_Fields extends Aarambha_Real_Estate_Customize_Base_Field {

    /**
     * Arguments for fields.
     *
     * @return void
     */
    public function init() {
        $this->args = [
            // Note One
            'aarambha_real_estate_property_builder_note_one' => [
                'type'              => 'heading',
                'label'             => esc_html__( 'BASIC FIELDS BUILDER', 'aarambha-real-estate' ),
                'section'           => 'aarambha_real_estate_property_section',
                'priority'          => 10,
            ],
        ];
    }

}
new Aarambha_Real_Estate_Customize_Global_Property_Builder_Fields();
