<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 27.09.2016
 * Time: 23:16
 */
// Creating the widget
class header_images_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
// Base ID of your widget
            'images_widget',

// Widget name will appear in UI
            __('Header Images Widget', 'neohesh'),

// Widget description
            array( 'description' => __( 'Header Images Widget', 'neohesh' ), )
        );
        add_action( 'admin_enqueue_scripts', array( $this, 'mfc_assets' ) );
    }
 function mfc_assets(){
     wp_enqueue_script('media-upload');
     wp_enqueue_script('thickbox');
     wp_enqueue_script('mfc-media-upload', get_stylesheet_directory_uri().'/js/media-upload.js', array( 'jquery' )) ;
     wp_enqueue_style('thickbox');
 }
// Creating widget front-end
// This is where the action happens
    public function widget( $args, $instance ) {
        $format_image = '<div style="background-image: url(\'%s\')"></div>';
        echo $args['before_widget'];

        if(isset($instance['image_1'])) {
            $image_1 = $instance['image_1'];
            printf($format_image, $image_1);
        }
        if(isset($instance['image_2'])) {
            $image_2 = $instance['image_2'];
            printf($format_image, $image_2);
        }
        if(isset($instance['image_3'])) {
            $image_3 = $instance['image_3'];
            printf($format_image, $image_3);
        }
        if(isset($instance['image_4'])) {
            $image_4 = $instance['image_4'];
            printf($format_image, $image_4);
        }

        echo $args['after_widget'];








    }

// Widget Backend
    public function form( $instance ) {
        $title = '';
        if( !empty( $instance['title'] ) ) {
            $title = $instance['title'];
        }

        $image_1 = '';
        if(isset($instance['image_1']))
        {
            $image_1 = $instance['image_1'];
        }
        $image_2 = '';
        if(isset($instance['image_2']))
        {
            $image_2 = $instance['image_2'];
        }
        $image_3 = '';
        if(isset($instance['image_3']))
        {
            $image_3 = $instance['image_3'];
        }
        $image_4 = '';
        if(isset($instance['image_4']))
        {
            $image_4 = $instance['image_4'];
        }

        ?>

        <p>
            <label for="<?php echo $this->get_field_name( 'image_1' ); ?>"><?php _e( 'Image:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'image_1' ); ?>" id="<?php echo $this->get_field_id( 'image_1' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image_1 ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'image_2' ); ?>"><?php _e( 'Image:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'image_2' ); ?>" id="<?php echo $this->get_field_id( 'image_2' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image_2 ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'image_3' ); ?>"><?php _e( 'Image:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'image_3' ); ?>" id="<?php echo $this->get_field_id( 'image_3' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image_3 ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'image_4' ); ?>"><?php _e( 'Image:' ); ?></label>
            <input name="<?php echo $this->get_field_name( 'image_4' ); ?>" id="<?php echo $this->get_field_id( 'image_4' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image_4 ); ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
        </p>

        <?php
    }

// Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['image_1'] = ( ! empty( $new_instance['image_1'] ) ) ? strip_tags( $new_instance['image_1'] ) : '';
        $instance['image_2'] = ( ! empty( $new_instance['image_2'] ) ) ? strip_tags( $new_instance['image_2'] ) : '';
        $instance['image_3'] = ( ! empty( $new_instance['image_3'] ) ) ? strip_tags( $new_instance['image_3'] ) : '';
        $instance['image_4'] = ( ! empty( $new_instance['image_4'] ) ) ? strip_tags( $new_instance['image_4'] ) : '';
        return $instance;
    }
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
    register_widget( 'header_images_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );