<?php

// namespace src;

class ApexCharts {

    /**
     * The link to the Apex Charts library used by the CDN as required.
     * 
     * @var string  CON_URL
     * 
     * @access  public
     * @since   0.1.0
     */

    const CDN_URL = 'https://cdn.jsdelivr.net/npm/apexcharts';


    /**
     * Load the CDN for apex charts. Only call if the package has not been installed via NPM.
     * 
     * @param   boolean $defer  Add the defer property to the `<script>` tag.
     * @param   boolean $async  Add the async property to the `<script>` tag.
     * 
     * @static
     * @access  public
     * @since   0.1.0
     */

    public static function link_cdn( bool $defer = false, bool $async = false ): void {
        $script = "<script src='" . self::CDN_URL . "'";
        if ( $defer ) {
            $script .= ' defer';
        }
        if ( $async ) {
            $script .= ' async';
        }
        $script .= '></script>';
        echo $script;
    }


    /**
     * Load the entire Apex Charts Javascript library directly into a script tag.
     * This is a heavy method, pulling about 400k over the internet, so this method
     * is not recommended except as a last resort.
     * 
     * @static
     * @access  public
     * @since   0.1.0
     */

    public static function get_lib(): void {
        echo "<script>" . file_get_contents( self::CDN_URL ) . "</script>";
    }


    public static function chart( array $data = [] ): void {

    }

}
