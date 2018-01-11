<?php

function dv_favorites($content){
	if (!is_single() || !is_user_logged_in() ) {
		return $content;
	}
	$img_src = plugins_url( "/img/source.gif", __FILE__ );
	return '<p id = "favorites"><span class = "dv-favorites-hidden"><img src = "'.$img_src.'" alt = ""></span><button class = "btn-favorites">Добавить в избранное</button><p>'.$content;
}

function dv_favorites_scripts(){
	if (!is_single() || !is_user_logged_in() ) {
		return;
	}
	//подключение стилей и скриптов
	// __FILE__ - путь к файлу
	wp_enqueue_script( "jquery.js", plugins_url("/js/jquery-3.2.1.min.js", __FILE__ ));
	wp_enqueue_style( "dv-favorites-style", plugins_url("/css/dv-favorites-style.css", __FILE__ ));

	//получаем глобальный объект поста, где содержится вся инфа
	global $post;

	wp_enqueue_script( "dv-favorites-scripts", plugins_url("/js/dv-favorites-scripts.js", __FILE__ ));
	// Локальное поделючение к ajax в admin, где dvfavorites - объект в  js -> dv-favorites-scripts
	//wp_create_nonce - генерирует проверочный код
		wp_localize_script( 'dv-favorites-scripts', 'dvfavorites', 
		array(
			'url' => admin_url('admin-ajax.php'),
			'nonce' => wp_create_nonce( 'dv_favorites_string' ),
			'post_id' => $post->ID
		)
	);  
}

// работа с ajax
function dv_favorites_test(){
	//1 параметр - строка которую мы получаем, 2 параметр - строка на основании которой был создан ключ
	if (!wp_verify_nonce( $_POST['security'],'dv_favorites_string' )) {
		wp_die( "Ошибка безопасности" );
		/*$user = wp_get_current_user();
		if(add_user_meta( $user->ID, 'dv_favorites_add', $post_id ))
		{
			wp_die( "Добавлено в избранное");
		}
		else{
			wp_die( "Ошибка добавления в избранное" );
		}*/
		
	}
	 echo (int)$_POST['post_id'];
	 wp_die( "Добавлено в избранное" );
}
