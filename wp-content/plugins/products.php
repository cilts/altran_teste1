<?php
/*
Plugin Name: Altran CRUD
Description: Sistema para teste Altran.
Author: Daniel Pintscher Baptista
*/

add_action( 'init', 'altran_product_post' );

function altran_product_post() {

    register_post_type( 'product', array(
        'labels' => array(
            'name' => __( 'Produtos' ),
            'singular_name' => __( 'Produto' ),
        ),
        'description' => 'CRUD de produtos.',
        'public' => true,
        'menu_position' => 20,
        'supports' => array( 'title' )
    ));
}

add_action( 'init', 'altran_clients_post' );

function altran_clients_post() {

    register_post_type( 'clients', array(
        'labels' => array(
            'name' => __( 'Clientes' ),
            'singular_name' => __( 'Cliente' ),
        ),
        'description' => 'CRUD de clientes.',
        'public' => true,
        'menu_position' => 21,
        'supports' => array( 'title' )
    ));
}

add_action( 'init', 'altran_orders_post' );

function altran_orders_post() {

    register_post_type( 'orders', array(
        'labels' => array(
            'name' => __( 'Pedidos' ),
            'singular_name' => __( 'Pedido' ),
        ),
        'description' => 'CRUD de pedidos.',
        'public' => true,
        'menu_position' => 22,
        'supports' => array( 'title' )
    ));
}