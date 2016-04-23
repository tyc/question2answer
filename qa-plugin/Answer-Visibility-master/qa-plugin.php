<?php
/**
 * Project name:    qa.
 * File name:       qa-plugin.php
 * Author:          jatin
 * Month:           07
 * Year:            2015
 */

if ( !defined( 'QA_VERSION' ) ) {
    header( 'Location: ../../' );
    exit;
}

qa_register_plugin_layer('answer-visibility.php', 'Answer Visibility Theme Layer');