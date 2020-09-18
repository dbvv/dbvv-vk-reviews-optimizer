<?php

add_shortcode('vk_r', 'vk_r_callback');

function vk_r_callback($atts) {
	$p = isset($atts['p']) ? $atts['p'] : null;

	if (!$p) return '';

	$post = get_post($p);

	$html .= '<div class="vk_r" id="vk_r_' . $p . '">';
	$html .= get_the_post_thumbnail($post, 'full', [
		'class' => 'vk_r_thumbnail',
		'data_vk_r' => $p,
	]);
	$html .= '</div>';
	return $html;
}
