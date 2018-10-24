<?php
/*
Plugin Name: Options Page - CleisonCarlos
Plugin URI: http://cleisoncarlos.com
Description: This is my awesome plugin :/
Author: Cleison Carlos
Version: 0.1
Author URI: http://cleisoncarlos.com
*/
 
add_action('admin_menu', function() {
    add_options_page( 'My awesome plugin settings', 'Página Inicial', 'manage_options', 'my-awesome-plugin', 'my_awesome_plugin_page' );
});
 
 
add_action( 'admin_init', function() {
    register_setting( 'my-awesome-plugin-settings', 'map_option_1' );
    register_setting( 'my-awesome-plugin-settings', 'map_option_2' );


    // editados
    register_setting( 'my-awesome-plugin-settings', 'service_titulo_01' );
    register_setting( 'my-awesome-plugin-settings', 'service_texto_01' );

    register_setting( 'my-awesome-plugin-settings', 'service_titulo_02' );
    register_setting( 'my-awesome-plugin-settings', 'service_texto_02' );

    register_setting( 'my-awesome-plugin-settings', 'service_titulo_03' );
    register_setting( 'my-awesome-plugin-settings', 'service_texto_03' );

    register_setting( 'my-awesome-plugin-settings', 'service_titulo_04' );
    register_setting( 'my-awesome-plugin-settings', 'service_texto_04' );



    // sessao 03
    register_setting( 'my-awesome-plugin-settings', 'service2_titulo_01' );
    register_setting( 'my-awesome-plugin-settings', 'service2_texto_01' );

    register_setting( 'my-awesome-plugin-settings', 'service2_titulo_02' );
    register_setting( 'my-awesome-plugin-settings', 'service2_texto_02' );

    register_setting( 'my-awesome-plugin-settings', 'service2_titulo_03' );
    register_setting( 'my-awesome-plugin-settings', 'service2_texto_03' );

    register_setting( 'my-awesome-plugin-settings', 'service2_titulo_04' );
    register_setting( 'my-awesome-plugin-settings', 'service2_texto_04' );



});
 
 
function my_awesome_plugin_page() {
  ?>
<div class="wrap">
    <form action="options.php" method="post">

        <?php
          settings_fields( 'my-awesome-plugin-settings' );
          do_settings_sections( 'my-awesome-plugin-settings' );
        ?>
        <table>
            <h1>Página Inicial - Dentista</h1>
            <hr>

            <th>
            <td>
                <h1>Sessao 01</h1>
                <hr>
            </td>
            </th>

            <tr>
                <th>Titulo 01:</th>
                <td><input type="text" placeholder="Título" name="service_titulo_01" value="<?php echo esc_attr( get_option('service_titulo_01') ); ?>"
                        size="50" /></td>
            </tr>
            <tr>
                <th>Texto 01:</th>
                <td><textarea placeholder="Texto" name="service_texto_01" rows="2" cols="50"><?php echo esc_attr( get_option('service_texto_01') ); ?></textarea></td>

            </tr>

            <th>
                <hr>
            </th>

            <tr>
                <th>Titulo 02:</th>
                <td><input type="text" placeholder="Título" name="service_titulo_02" value="<?php echo esc_attr( get_option('service_texto_02') ); ?>"
                        size="50" /></td>
            </tr>
            <tr>
                <th>Texto 02:</th>
                <td><textarea placeholder="Texto" name="service_texto_02" rows="2" cols="50"><?php echo esc_attr( get_option('service_texto_02') ); ?></textarea></td>
            </tr>

            <th>
                <hr>
            </th>

            <tr>
                <th>Titulo 03:</th>
                <td><input type="text" placeholder="Título" name="service_titulo_03" value="<?php echo esc_attr( get_option('service_titulo_03') ); ?>"
                        size="50" /></td>
            </tr>
            <tr>
                <th>Texto 03:</th>
                <td><textarea placeholder="Texto" name="service_texto_03" rows="2" cols="50"><?php echo esc_attr( get_option('service_texto_03') ); ?></textarea></td>
            </tr>

            <th>
                <hr>
            </th>

            <tr>
                <th>Titulo 04:</th>
                <td><input type="text" placeholder="Título" name="service_titulo_04" value="<?php echo esc_attr( get_option('service_titulo_04') ); ?>"
                        size="50" /></td>
            </tr>
            <tr>
                <th>Texto 04:</th>
                <td><textarea placeholder="Texto" name="service_texto_04" rows="2" cols="50"><?php echo esc_attr( get_option('service_texto_04') ); ?></textarea></td>
            </tr>

            <th>
            <td>
                <h1>Sessao 02</h1>
                <hr>
            </td>
            </th>

            <tr>
                <th>Titulo:</th>
                <td><input type="text" placeholder="Your name" name="map_option_1" value="<?php echo esc_attr( get_option('map_option_1') ); ?>"
                        size="50" /></td>
            </tr>
            <tr>
                <th>Texto:</th>
                <td><textarea placeholder="Your bio" name="map_option_2" rows="5" cols="50"><?php echo esc_attr( get_option('map_option_2') ); ?></textarea></td>
            </tr>

            <!-- <tr>
                <th>Your age</th>
                <td>

                    <select name="map_option_3">
                        <option value="">&mdash; select &mdash;</option>
                        <option value="10-20" <?php// echo esc_attr( get_option('map_option_3') )=='10-20' ?
                           // 'selected="selected"' : '' ; ?>>10-30</option>
                        <option value="20-30" <?php// echo esc_attr( get_option('map_option_3') )=='20-30' ?
                           // 'selected="selected"' : '' ; ?>>20-30</option>
                        <option value="30-50" <?php// echo esc_attr( get_option('map_option_3') )=='30-50' ?
                           // 'selected="selected"' : '' ; ?>>30-50</option>
                    </select>

                </td>
            </tr> -->

            <!-- // <tr>
            //     <th>Your gender</th>
            //     <td>
            //         <label>
            //             <input type="radio" name="map_option_4" value="male" <?php// echo esc_attr(
            //                 get_option('map_option_4') )=='male' ? 'checked="checked"' : '' ; ?> /> Male <br />
            //         </label>
            //         <label>
            //             <input type="radio" name="map_option_4" value="female" <?php// echo esc_attr(
            //                 get_option('map_option_4') )=='female' ? 'checked="checked"' : '' ; ?> /> Female
            //         </label>
            //     </td>
            // </tr> -->

            <!-- <tr>
                <th>Do you love WordPress?</th>
                <td>
                    <label>
                        <input type="checkbox" name="map_option_5" <?php// echo esc_attr( get_option('map_option_5') )=='on'
                           // ? 'checked="checked"' : '' ; ?> />Yes, I love WordPress
                    </label><br />
                    <label>
                        <input type="checkbox" name="map_option_6" <?php// echo esc_attr( get_option('map_option_6') )=='on'
                           // ? 'checked="checked"' : '' ; ?> />No, I love WordPress
                    </label>
                </td>
            </tr> -->

            <th>
            <td>
                <h1>Sessao 03</h1>
                <hr>
            </td>
            </th>

            <tr>
                <th>Titulo 01:</th>
                <td><input type="text" placeholder="Título" name="service2_titulo_01" value="<?php echo esc_attr( get_option('service2_titulo_01') ); ?>"
                        size="50" /></td>
            </tr>
            <tr>
                <th>Texto 01:</th>
                <td><textarea placeholder="Texto" name="service2_texto_01" rows="2" cols="50"><?php echo esc_attr( get_option('service2_texto_01') ); ?></textarea></td>

            </tr>

            <th>
                <hr>
            </th>

            <tr>
                <th>Titulo 02:</th>
                <td><input type="text" placeholder="Título" name="service2_titulo_02" value="<?php echo esc_attr( get_option('service2_texto_02') ); ?>"
                        size="50" /></td>
            </tr>
            <tr>
                <th>Texto 02:</th>
                <td><textarea placeholder="Texto" name="service2_texto_02" rows="2" cols="50"><?php echo esc_attr( get_option('service2_texto_02') ); ?></textarea></td>
            </tr>

            <th>
                <hr>
            </th>

            <tr>
                <th>Titulo 03:</th>
                <td><input type="text" placeholder="Título" name="service2_titulo_03" value="<?php echo esc_attr( get_option('service2_titulo_03') ); ?>"
                        size="50" /></td>
            </tr>
            <tr>
                <th>Texto 03:</th>
                <td><textarea placeholder="Texto" name="service2_texto_03" rows="2" cols="50"><?php echo esc_attr( get_option('service2_texto_03') ); ?></textarea></td>
            </tr>

            <th>
                <hr>
            </th>

            <tr>
                <th>Titulo 04:</th>
                <td><input type="text" placeholder="Título" name="service2_titulo_04" value="<?php echo esc_attr( get_option('service2_titulo_04') ); ?>"
                        size="50" /></td>
            </tr>
            <tr>
                <th>Texto 04:</th>
                <td><textarea placeholder="Texto" name="service2_texto_04" rows="2" cols="50"><?php echo esc_attr( get_option('service2_texto_04') ); ?></textarea></td>
            </tr>

            <tr>
                <td>
                    <?php submit_button(); ?>
                </td>
            </tr>

        </table>

    </form>
</div>
<?php
}
