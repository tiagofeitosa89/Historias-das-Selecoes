(function($){

	// DEFINE BACKGROUND DO SLIDE
	(function($){
		$('.slider_item').each(function(){
			var sliderBg = $(this).attr('slider-bg');
			$(this).css({'background-image': 'url('+sliderBg+')'});
		});
	}(jQuery));


	// AVANÇA PARA O PRÓXIMO SLIDE
	var nextSlider = function(){
		if($('.slider_item.active').next('.slider_item').size()){

			$('.slider_item.active').each(function(){
				$(this).next('.slider_item').addClass('active');
				$(this).removeClass('active');
			});

		}else{
			$('.slider_item.active').each(function(){
				$('.slider_item').removeClass('active');
				$('.slider_item:eq(0)').addClass('active');
			});
		}
	}

		// VOLTA PARA O SLIDE ANTERIOR
		var prevSlider = function(){
			if($('.slider_item.active').index() > 1){
				$('.slider_item.active').each(function(){
					$(this).prev('.slider_item').addClass('active');
					$(this).removeClass('active');
				});

			}else{
				$('.slider_item.active').each(function(){
					$('.slider_item').removeClass('active');
					$('.slider_item:last-of-type').addClass('active');
				});
			}
		}

		// INICIALIZAÇÃO AUTOMÁTICA DO SLIDE
		var sliderAuto = setInterval(nextSlider, 10000);

		$('.slider_content, .slider-next, .slider-prev').hover(function(){
			clearInterval(sliderAuto);
		},function(){
			sliderAuto = setInterval(nextSlider, 10000);
		});

		//AÇÕES DE AVANÇAR E VOLTAR SLIDE
		$('.slider-next').click(function(event){
			event.preventDefault();
			nextSlider();
		});

		$('.slider-prev').click(function(event){
			event.preventDefault();
			prevSlider();
		});


	}(jQuery))

