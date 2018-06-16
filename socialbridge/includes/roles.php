<?php

/**
 * Register Social Bridge logger role.
 */

 function socialbridge_register_role() {
     add_role( 'socialbridge_logger', 'Social Bridge Logger');
     
 }

 /**
 * Remove Social Bridge logger role.
 */
 function socialbridge_remove_role() {
    remove_role( 'socialbridge_logger', 'Social Bridge Logger');
    
}

/**
 * Grant SocialBridge-level capabalities to Administrator, Editor and Social-bridge logger.
 */
 function socialbridge_add_capabilities(){
    $roles = array('administrator', 'editor', 'socialbridge_logger');

    foreach ($roles as $the_role) {
        $role = get_role( $the_role );

        $role->add_cap( 'read' );
        $role->add_cap( 'edit_socialbridges' );
        $role->add_cap( 'publish_socialbridges' );
        $role->add_cap( 'edit_published_socialbridges' );
    }

    $manager_roles = array('administrator', 'editor');

    foreach ($manager_roles as $the_role) {
        $role = get_role( $the_role );
        $role->add_cap( 'read_private_socialbridges' );
        $role->add_cap( 'edit_others_socialbridges' ); 
        $role->add_cap( 'edit_private_socialbridges' );               
        $role->add_cap( 'delete_socialbridges' );
        $role->add_cap( 'delete_published_socialbridges' );
        $role->add_cap( 'delete_private_socialbridges' );
        $role->add_cap( 'delete_others_socialbridges' );        
    }

}

/**
 * Remove SocialBridge-level capabalities from Administrator, Editor and Social-bridge logger.
 */
function socialbridge_remove_capabilities(){

    $manager_roles = array('administrator', 'editor', 'socialbridge_logger');

    foreach ($manager_roles as $the_role) {
        $role = get_role( $the_role );
        $role->remove_cap( 'read' );
        $role->remove_cap( 'edit_socialbridges' );
        $role->remove_cap( 'publish_socialbridges' );
        $role->remove_cap( 'edit_published_socialbridges' );
        $role->remove_cap( 'read_private_socialbridges' );
        $role->remove_cap( 'edit_others_socialbridges' ); 
        $role->remove_cap( 'edit_private_socialbridges' );               
        $role->remove_cap( 'delete_socialbridges' );
        $role->remove_cap( 'delete_published_socialbridges' );
        $role->remove_cap( 'delete_private_socialbridges' );
        $role->remove_cap( 'delete_others_socialbridges' );        
    }
}