<?php

add_action('rest_api_init', function () {
	register_rest_route('vk-r/v1', 'get_code', [
		'methods' => 'POST',
		'callback' => 'dbvv_vk_reviews_optimizer_get_vk_code',
	]);
});

function dbvv_vk_reviews_optimizer_get_vk_code($request) {
	$data = $request->get_param('id');
	$excerpt = get_post($data)->post_excerpt;
	echo json_encode([
		'data' => $excerpt,
	]);
	exit;
}
