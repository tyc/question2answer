<?php
/**
 * Created by Q2A Market.
 * User: jsoni
 * Date: 3/25/2016
 * Time: 9:31 AM
 */

/**
 * Class qa_html_theme_layer
 */
class qa_html_theme_layer extends qa_html_theme_base
{
    /**
     * Overriding core answer list method
     *
     * @param $a_items
     */
    public function a_list_items( $a_items )
    {
        $uids = $this->qam_a_list_users( $a_items );

        foreach ( $a_items as $a_item ) {

            if ( is_array( $uids ) ) {
                if ( in_array( qa_get_logged_in_userid(), $uids ) || qa_get_logged_in_level() >= QA_USER_LEVEL_EXPERT ) {
                    $this->a_list_item( $a_item );
                } else {
                    $this->output( '<div class="alert" style="background-color: #FFFDB8;border: 1px solid #D4D2A9;">Provide some of your own ideas to view, to vote and to comment on the ideas of others</div>' );
                }
            }
        }
    }

    /**
     * Gathering all userids for answers and returning based on option set
     *
     * @param $a_items
     *
     * @todo adding option to view only own answer
     *
     * @return array
     */
    public function qam_a_list_users( $a_items )
    {
        foreach ( $a_items as $a_item ) {
            $u_ids[] = $a_item[ 'raw' ][ 'userid' ];
        }

        return array_unique( $u_ids );
    }
}