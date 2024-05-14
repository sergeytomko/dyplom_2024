<?php


$fashion_designer_mart_custom_css = '';

/*---------------------------text-transform-------------------*/

$fashion_designer_mart_text_transform = get_theme_mod( 'menu_text_transform_fashion_designer_mart','CAPITALISE');
if($fashion_designer_mart_text_transform == 'CAPITALISE'){

	$fashion_designer_mart_custom_css .='#main-menu ul li a{';

		$fashion_designer_mart_custom_css .='text-transform: capitalize ;';

	$fashion_designer_mart_custom_css .='}';

}else if($fashion_designer_mart_text_transform == 'UPPERCASE'){

	$fashion_designer_mart_custom_css .='#main-menu ul li a{';

		$fashion_designer_mart_custom_css .='text-transform: uppercase ;';

	$fashion_designer_mart_custom_css .='}';

}else if($fashion_designer_mart_text_transform == 'LOWERCASE'){

	$fashion_designer_mart_custom_css .='#main-menu ul li a{';

		$fashion_designer_mart_custom_css .='text-transform: lowercase ;';

	$fashion_designer_mart_custom_css .='}';
}

	/*---------------------------menu-zoom-------------------*/

		$fashion_designer_mart_menu_zoom = get_theme_mod( 'fashion_designer_mart_menu_zoom','None');

    if($fashion_designer_mart_menu_zoom == 'None'){

		$fashion_designer_mart_custom_css .='#main-menu ul li a{';

			$fashion_designer_mart_custom_css .='';

		$fashion_designer_mart_custom_css .='}';

	}else if($fashion_designer_mart_menu_zoom == 'Zoominn'){

		$fashion_designer_mart_custom_css .='#main-menu ul li a:hover{';

			$fashion_designer_mart_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #f1657d;';

		$fashion_designer_mart_custom_css .='}';
	}

/*---------------------------Container Width-------------------*/

$fashion_designer_mart_container_width = get_theme_mod('fashion_designer_mart_container_width');

	$fashion_designer_mart_custom_css .='body{';

		$fashion_designer_mart_custom_css .='width: '.esc_attr($fashion_designer_mart_container_width).'%; margin: auto;';

	$fashion_designer_mart_custom_css .='}';

	/*---------------------------Slider-content-alignment-------------------*/

	$fashion_designer_mart_slider_content_alignment = get_theme_mod( 'fashion_designer_mart_slider_content_alignment','LEFT-ALIGN');

	 if($fashion_designer_mart_slider_content_alignment == 'LEFT-ALIGN'){

			$fashion_designer_mart_custom_css .='.blog_box{';

				$fashion_designer_mart_custom_css .='text-align:left;';

			$fashion_designer_mart_custom_css .='}';


		}else if($fashion_designer_mart_slider_content_alignment == 'CENTER-ALIGN'){

			$fashion_designer_mart_custom_css .='.blog_box{';

				$fashion_designer_mart_custom_css .='text-align:center; left:0; right:0;';

			$fashion_designer_mart_custom_css .='}';


		}else if($fashion_designer_mart_slider_content_alignment == 'RIGHT-ALIGN'){

			$fashion_designer_mart_custom_css .='.blog_box{';

				$fashion_designer_mart_custom_css .='text-align:right; left:55%; right:15%';

			$fashion_designer_mart_custom_css .='}';

		}

	/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$fashion_designer_mart_scroll_top_position = get_theme_mod( 'fashion_designer_mart_scroll_top_position','Right');

	if($fashion_designer_mart_scroll_top_position == 'Right'){

		$fashion_designer_mart_custom_css .='.scroll-up{';

			$fashion_designer_mart_custom_css .='right: 20px;';

		$fashion_designer_mart_custom_css .='}';

	}else if($fashion_designer_mart_scroll_top_position == 'Left'){

		$fashion_designer_mart_custom_css .='.scroll-up{';

			$fashion_designer_mart_custom_css .='left: 20px;';

		$fashion_designer_mart_custom_css .='}';

	}else if($fashion_designer_mart_scroll_top_position == 'Center'){

		$fashion_designer_mart_custom_css .='.scroll-up{';

			$fashion_designer_mart_custom_css .='right: 50%;left: 50%;';

		$fashion_designer_mart_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


$fashion_designer_mart_pagination_setting = get_theme_mod('fashion_designer_mart_pagination_setting',true);

	if($fashion_designer_mart_pagination_setting == false){

		$fashion_designer_mart_custom_css .='.nav-links{';

			$fashion_designer_mart_custom_css .='display: none;';

		$fashion_designer_mart_custom_css .='}';
	}

	/*---------------------------related Product Settings-------------------*/


$fashion_designer_mart_related_product_setting = get_theme_mod('fashion_designer_mart_related_product_setting',true);

	if($fashion_designer_mart_related_product_setting == false){

		$fashion_designer_mart_custom_css .='.related.products, .related h2{';

			$fashion_designer_mart_custom_css .='display: none;';

		$fashion_designer_mart_custom_css .='}';
	}

	/*---------------------------Copyright Text alignment-------------------*/

$fashion_designer_mart_copyright_text_alignment = get_theme_mod( 'fashion_designer_mart_copyright_text_alignment','LEFT-ALIGN');

 if($fashion_designer_mart_copyright_text_alignment == 'LEFT-ALIGN'){

		$fashion_designer_mart_custom_css .='.copy-text p{';

			$fashion_designer_mart_custom_css .='text-align:left;';

		$fashion_designer_mart_custom_css .='}';


	}else if($fashion_designer_mart_copyright_text_alignment == 'CENTER-ALIGN'){

		$fashion_designer_mart_custom_css .='.copy-text p{';

			$fashion_designer_mart_custom_css .='text-align:center;';

		$fashion_designer_mart_custom_css .='}';


	}else if($fashion_designer_mart_copyright_text_alignment == 'RIGHT-ALIGN'){

		$fashion_designer_mart_custom_css .='.copy-text p{';

			$fashion_designer_mart_custom_css .='text-align:right;';

		$fashion_designer_mart_custom_css .='}';

	}


	/*--------------------------- Slider Opacity -------------------*/

	$fashion_designer_mart_slider_opacity_color = get_theme_mod( 'fashion_designer_mart_slider_opacity_color','0.6');

	if($fashion_designer_mart_slider_opacity_color == '0'){

		$fashion_designer_mart_custom_css .='.blog_inner_box img{';

			$fashion_designer_mart_custom_css .='opacity:0';

		$fashion_designer_mart_custom_css .='}';

		}else if($fashion_designer_mart_slider_opacity_color == '0.1'){

		$fashion_designer_mart_custom_css .='.blog_inner_box img{';

			$fashion_designer_mart_custom_css .='opacity:0.1';

		$fashion_designer_mart_custom_css .='}';

		}else if($fashion_designer_mart_slider_opacity_color == '0.2'){

		$fashion_designer_mart_custom_css .='.blog_inner_box img{';

			$fashion_designer_mart_custom_css .='opacity:0.2';

		$fashion_designer_mart_custom_css .='}';

		}else if($fashion_designer_mart_slider_opacity_color == '0.3'){

		$fashion_designer_mart_custom_css .='.blog_inner_box img{';

			$fashion_designer_mart_custom_css .='opacity:0.3';

		$fashion_designer_mart_custom_css .='}';

		}else if($fashion_designer_mart_slider_opacity_color == '0.4'){

		$fashion_designer_mart_custom_css .='.blog_inner_box img{';

			$fashion_designer_mart_custom_css .='opacity:0.4';

		$fashion_designer_mart_custom_css .='}';

		}else if($fashion_designer_mart_slider_opacity_color == '0.5'){

		$fashion_designer_mart_custom_css .='.blog_inner_box img{';

			$fashion_designer_mart_custom_css .='opacity:0.5';

		$fashion_designer_mart_custom_css .='}';

		}else if($fashion_designer_mart_slider_opacity_color == '0.6'){

		$fashion_designer_mart_custom_css .='.blog_inner_box img{';

			$fashion_designer_mart_custom_css .='opacity:0.6';

		$fashion_designer_mart_custom_css .='}';

		}else if($fashion_designer_mart_slider_opacity_color == '0.7'){

		$fashion_designer_mart_custom_css .='.blog_inner_box img{';

			$fashion_designer_mart_custom_css .='opacity:0.7';

		$fashion_designer_mart_custom_css .='}';

		}else if($fashion_designer_mart_slider_opacity_color == '0.8'){

		$fashion_designer_mart_custom_css .='.blog_inner_box img{';

			$fashion_designer_mart_custom_css .='opacity:0.8';

		$fashion_designer_mart_custom_css .='}';

		}else if($fashion_designer_mart_slider_opacity_color == '0.9'){

		$fashion_designer_mart_custom_css .='.blog_inner_box img{';

			$fashion_designer_mart_custom_css .='opacity:0.9';

		$fashion_designer_mart_custom_css .='}';

		}else if($fashion_designer_mart_slider_opacity_color == '1.0'){

		$fashion_designer_mart_custom_css .='.blog_inner_box img{';

			$fashion_designer_mart_custom_css .='opacity:0.9';

		$fashion_designer_mart_custom_css .='}';

		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$fashion_designer_mart_overlay_option = get_theme_mod('fashion_designer_mart_overlay_option', true);

	if($fashion_designer_mart_overlay_option == false){

		$fashion_designer_mart_custom_css .='.blog_inner_box img{';

			$fashion_designer_mart_custom_css .='opacity:0.6;';

		$fashion_designer_mart_custom_css .='}';
	}

	$fashion_designer_mart_slider_image_overlay_color = get_theme_mod('fashion_designer_mart_slider_image_overlay_color', true);

	if($fashion_designer_mart_slider_image_overlay_color != false){

		$fashion_designer_mart_custom_css .='.blog_inner_box{';

			$fashion_designer_mart_custom_css .='background-color: '.esc_attr($fashion_designer_mart_slider_image_overlay_color).';';

		$fashion_designer_mart_custom_css .='}';
	}

	
	/*---------------------------woocommerce pagination alignment settings-------------------*/

	$fashion_designer_mart_woocommerce_pagination_position = get_theme_mod( 'fashion_designer_mart_woocommerce_pagination_position','Center');

	if($fashion_designer_mart_woocommerce_pagination_position == 'Left'){

		$fashion_designer_mart_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$fashion_designer_mart_custom_css .='text-align: left;';

		$fashion_designer_mart_custom_css .='}';

	}else if($fashion_designer_mart_woocommerce_pagination_position == 'Center'){

		$fashion_designer_mart_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$fashion_designer_mart_custom_css .='text-align: center;';

		$fashion_designer_mart_custom_css .='}';

	}else if($fashion_designer_mart_woocommerce_pagination_position == 'Right'){

		$fashion_designer_mart_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$fashion_designer_mart_custom_css .='text-align: right;';

		$fashion_designer_mart_custom_css .='}';
	}

