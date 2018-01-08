$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});
				$('.popup-with-zoom-anim').on('click', function(e) {
					$('#signUpForm').find('input[name="Plan"]').val($(this).data("plan"));
					$('#signUpForm').find('input[name="Price"]').val($(this).data("price"));
				});
				$('#signUpForm').validate({
					errorPlacement: function(error, element) {
						if (element.attr('name') == 'Terms') {
							error.insertAfter(element.parent());
						} else {
							error.insertAfter(element);
						}
					}
				});
				if ($('#paypalForm').length > 0) {
					$('#paypalForm').trigger('submit');
				}
			});
