<?php
/**
 * The Header template for our theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
    <div class="register__con">
        <div class="register__con-in">
            <div class="register__title">
            Для дальнейшей регистрации выберите тип клиента.
            </div>
            <div class="register__wrapper">
                <a href="http://iveracollection.by/my-account/"  class="register__item">
                    <div class="register__ramka">
                        <div class="register__ramka__in">
                            <div class="register__ramka__text">
                                Розничный клиент
                            </div>
                            <button class="register__ramka__btn">
                                Выбрать
                            </button>
                        </div>
                    </div>
                    <div class="register__img-con">
                        <img src="http://iveracollection.com/wp-content/uploads/2017/06/post-example-2-image-21.jpg" alt="Красивая девушка" class="register__img" loading="lazy">
                    </div>
                </a>
                <a href="http://iveracollection.com/my-account/" class="register__item">
                    <div  class="register__ramka">
                        <div class="register__ramka__in">
                            <div class="register__ramka__text">
                                Оптовый клиент
                            </div>
                            <button class="register__ramka__btn">
                                Выбрать
                            </button>
                        </div>
                    </div>
                    <div class="register__img-con">
                        <img src="http://iveracollection.com/wp-content/uploads/2017/06/post-example-2-image-21.jpg" alt="Красивая девушка" class="register__img" loading="lazy">
                    </div>
                </a>
            </div>
        </div>
    </div>
	<div class="cookies__container">
        <div class="cookies__text">
            Наш сайт использует куки, нажимая на кнопку вы соглашаетесь на обработку пеосональных данных в соответствии с <a href="" class="coockies__text">политикой конфиденциальности.</a>
        </div>
        <button class="cookies__btn">
            Согласен
        </button>
    </div>
    <style>

        

        .register__ramka{
            border: 3px solid transparent;
            position: absolute;
            top: 10px;
            bottom: 10px;
            left: 10px;
            right: 10px;
            height: calc(100% - 20px);
            width: calc(100% - 20px);
            box-sizing: border-box;
        }

        .register__item:hover .register__ramka{
            border: 3px solid #fff;
            
        }

        .register__img-con{
            height: 100%;
            width: 100%;
        }

        .register__img-con img{
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .register__item{
            height: 100%;
            width: 100%;
            position: relative;
            background: #fff;
        }

        .register__ramka__in{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            gap: 40px;
        }


        .register__title{
            text-align: center;
            line-height: 54px;
            font-size: 26px;
            margin-bottom: 20px;
        }

        .register__ramka__text{
            color: #ffffff;
            font-size: 25px;
            line-height: 30px;
            text-transform: uppercase;
            text-align: center;
        }


        .register__con-in{
            background: #fff;
            max-width: 1220px;
            padding: 40px;
            box-sizing: border-box;
            margin: 0 auto;
			margin-top: 50px;
        }

        .register__wrapper{
            display: flex;
            gap: 40px;
        }

        .register__con{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            z-index: 389;
            display: none;
            opacity: 0;
            transition: all 0.3s;	
        }

        .cookies__container{
                justify-content: space-between;
				background: #fff;
				padding: 20px;
				position: fixed;
				align-items: center;
				bottom: 0;
				right: 0;
				max-width: 100%;
				width: 100%;
				display: none;
				opacity: 0;
				transition: all 0.3s;
				z-index: 500;
				gap: 20px;
        }

        .cookies__btn, .register__ramka__btn{
                color: black;
				font-weight: 400;
				border: 1px;
				border-color: #000000;
				border-style: solid;
				width: auto;
				padding: 10px;
				height: fit-content;
				height: -webkit-fit-content;
				scroll-behavior: smooth;
        }
		
		@media screen and (max-width: 768px){
			.register__con{
				overflow: scroll;
			}
			
				.register__title{
					text-align: center;
					line-height: 110%;
					font-size: 26px;
					margin-bottom: 20px;
				}
			
			.register__wrapper{
				flex-direction: column;
				gap: 20px;
			}
			
			.register__con-in{
				background: #fff;
				max-width: 1220px;
				padding: 20px;
				box-sizing: border-box;
				margin: 0 auto;
				margin-top: 50px;
			}
		}
		
		
		@media screen and (max-width: 476px){
			.cookies__container{
				flex-direction: column;
			}
			
			.register__title{
					text-align: center;
					line-height: 110%;
					font-size: 20px;
					margin-bottom: 20px;
				}
		}
    </style>
    <script>
        
        document.addEventListener("DOMContentLoaded", (event) => {
            if(!localStorage.getItem("cookies")){
                const cookiesBtn = document.querySelector(".cookies__container .cookies__btn");
                const cookiesCon = document.querySelector(".cookies__container");
                if(cookiesCon && cookiesBtn){
                    cookiesCon.style.display = "flex";
                    setTimeout(() => {
                        cookiesCon.style.opacity = "1";
                    }, 50);
                    cookiesBtn.addEventListener("click", (event) => {
                        localStorage.setItem("cookies", true);
                        cookiesCon.style.opacity = "0";
                        setTimeout(() => {
                            cookiesCon.style.display = "none";
                        }, 300);
                    });
                }

            }
            
            const accBtn = document.querySelector(".wd-header-my-account");
            const regCon = document.querySelector(".register__con");
            const logBg = document.querySelector(".wd-close-side");
			const logSide = document.querySelector(".login-form-side");
			const htmlCon = document.querySelector("html");
			const body = document.querySelector("body");
            if(accBtn && regCon && body && logSide && logBg){
                if(!body.classList.contains("logged-in")){
                    accBtn.addEventListener("click", (event) => {
						event.preventDefault();
						logSide.style.display = "none";
						logBg.style.display = "none";
                        event.preventDefault();
						htmlCon.style.overflow = "hidden";
						body.style.overflow = "hidden";
                        regCon.style.display = "block";
                        setTimeout(() => {
                            regCon.style.opacity = "1";
                        }, 50);
                    })
                }
            }

        });
    </script>
</head>

<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) : ?>
		<?php wp_body_open(); ?>
	<?php endif; ?>

	<?php do_action( 'woodmart_after_body_open' ); ?>

	<div class="website-wrapper">
		<?php if ( woodmart_needs_header() ) : ?>
			<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) : ?>
				<header <?php woodmart_get_header_classes(); // phpcs:ignore ?>>
					<?php whb_generate_header(); ?>
				</header>
			<?php endif ?>

			<?php woodmart_page_top_part(); ?>
		<?php endif ?>
