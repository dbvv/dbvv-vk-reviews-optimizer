;(function ($) {
	$(document).ready(function () {
		$('.vk_r_thumbnail').on('click', function (e) {
			e.preventDefault();
			var url = vk_r.url;
			$this = $(this);
			$.ajax({
				url: url,
				method: 'POST',
				data: {
					id: $(this).attr('data_vk_r'),
				},
				success: function (data) {
					$this.replaceWith(data.data);
				}
			})
		});
	});
})(jQuery);
