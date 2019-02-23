<?php
/**
 * Class aliases for backwards-compatibility.
 *
 * @package    Kirki
 * @copyright  Copyright (c) 2019, Ari Stathopoulos (@aristath)
 * @license    https://opensource.org/licenses/MIT
 * @since      4.0
 */

add_action(
    'customize_register',
    function() {
        class_alias( 'Kirki\Control\Repeater', 'Kirki_Control_Repeater' );
        class_alias( 'Kirki\Settings\Repeater_Setting', 'Kirki_Settings_Repeater_Setting' );
    }
);