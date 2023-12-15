<?php
    $html_best=showsp($dssp_best);

    $html_hot='';
    foreach ($dssp_hot as $sp) {
        extract($sp);
        if($price>0) {
            $gia='<span class="current__price">'.number_format($price,0,",",".").'VNĐ</span>';
            $gia_cu='<span class="old__price">'.number_format($old_price,0,",",".").'VNĐ</span>';
        } else{
            $gia='<span class="current__price">Đang cập nhật</span>';
            $gia_cu='<span class="product__price"></span> <br>';
        }
        $link="index.php?pg=product-detail&idpro=".$id;
        $html_hot.='<div class="col mb-30">
                        <div class="product__items ">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="'.$link.'">
                                    <img class="product__items--img product__primary--img" src="./uploads/'.$img.'" alt="product-img">
                                </a>
                                <div class="product__badge">
                                    <span class="product__badge--items sale">Trend</span>
                                </div>
                            </div>
                            <div class="product__items--content">
                                <h3 class="product__items--content__title h4"><a href="'.$link.'">'.$name.'</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">'.$gia.'</span>
                                    <span class="price__divided"></span>
                                    <span class="old__price">'.$gia_cu.'</span>
                                </div>
                                <ul class="rating product__rating d-flex">
                                    <li class="rating__list">
                                        <span class="rating__list--icon">
                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__list--icon">
                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__list--icon">
                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__list--icon">
                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__list--icon">
                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>

                                </ul>
                                <ul class="product__items--action d-flex">
                                    <li class="product__items--action__list">
                                        <form action="index.php?pg=addcart" method="post"> 
                                            <input type="hidden" name="id" value="'.$id.'">
                                            <input type="hidden" name="name" value="'.$name.'">
                                            <input type="hidden" name="img" value="'.$img.'">
                                            <input type="hidden" name="price" value="'.$price.'">
                                            <input type="hidden" name="amount" value="1">
                                            <button class="product__items--action__btn add__to--cart" type="submit" name="btnaddcart">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                    <g transform="translate(0 0)">
                                                    <g>
                                                        <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                        <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                        <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                    </g>
                                                    </g>
                                                </svg>
                                                <span class="add__to--cart__text"> + Thêm vào giỏ hàng</span>
                                            </button>
                                        </form>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1" href="'.$link.'">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>';
    }

    $html_new='';
    foreach ($dssp_new as $sp) {
        extract($sp);
        if($price>0) {
            $gia='<span class="current__price">'.number_format($price,0,",",".").'VNĐ</span>';
            $gia_cu='<span class="old__price">'.number_format($old_price,0,",",".").'VNĐ</span>';
        } else{
            $gia='<span class="current__price">Đang cập nhật</span>';
            $gia_cu='<span class="product__price"></span> <br>';
        }
        $link="index.php?pg=product-detail&idpro=".$id;
        $html_new.='<div class="col mb-30">
                        <div class="product__items ">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="'.$link.'">
                                    <img class="product__items--img product__primary--img" src="./uploads/'.$img.'" alt="product-img">
                                </a>
                                <div class="product__badge">
                                    <span class="product__badge--items sale">New</span>
                                </div>
                            </div>
                            <div class="product__items--content">
                            
                                <h3 class="product__items--content__title h4"><a href="'.$link.'">'.$name.'</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">'.$gia.'</span>
                                    <span class="price__divided"></span>
                                    <span class="old__price">'.$gia_cu.'</span>
                                </div>
                                <ul class="rating product__rating d-flex">
                                    <li class="rating__list">
                                        <span class="rating__list--icon">
                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__list--icon">
                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__list--icon">
                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__list--icon">
                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__list--icon">
                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">
                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>

                                </ul>
                                <ul class="product__items--action d-flex">
                                    <li class="product__items--action__list">
                                        <form action="index.php?pg=addcart" method="post"> 
                                            <input type="hidden" name="id" value="'.$id.'">
                                            <input type="hidden" name="name" value="'.$name.'">
                                            <input type="hidden" name="img" value="'.$img.'">
                                            <input type="hidden" name="price" value="'.$price.'">
                                            <input type="hidden" name="amount" value="1">
                                            <button class="product__items--action__btn add__to--cart" type="submit" name="btnaddcart">
                                                <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 14.706 13.534">
                                                    <g transform="translate(0 0)">
                                                    <g>
                                                        <path data-name="Path 16787" d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z" transform="translate(0 -463.248)" fill="currentColor"></path>
                                                        <path data-name="Path 16788" d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z" transform="translate(-1.191 -466.622)" fill="currentColor"></path>
                                                        <path data-name="Path 16789" d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z" transform="translate(-2.875 -466.622)" fill="currentColor"></path>
                                                    </g>
                                                    </g>
                                                </svg>
                                                <span class="add__to--cart__text"> + Thêm vào giỏ hàng</span>
                                            </button>
                                        </form>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1" href="'.$link.'">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="25.51" height="23.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>';
    }

    $html_best2=showsp_slide($dssp_best);

    $html_blog=showblog_slide($dsblog);

    $html_cmt="";
    foreach($comment_list as $item) {
        extract($item);
        // Khởi tạo lại chuỗi HTML cho đánh giá sao
        $html_rating = '<ul class="rating testimonial__rating d-flex justify-content-center" data-commentid="'.$item['id'].'">';
        for ($i = 1; $i <= 5; $i++) {
            $activeClass = ($i <= $item['rating']) ? 'active' : ''; 
            $html_rating .= '<li class="rating__list '.$activeClass.'" data-rating="'.$i.'">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="14.105" height="14.732" viewBox="0 0 10.105 9.732">  
                                        <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="'.($activeClass ? 'currentColor' : '#ccc').'"></path>
                                    </svg>
                                </span>
                            </li>';
        }
        $html_rating .= '</ul>';
        $html_cmt.= '<div class="swiper-slide">
                        <div class="testimonial__items text-center">
                            <div class="testimonial__items--thumbnail">
                                <img class="testimonial__items--thumbnail__img border-radius-50" src="./uploads/'.$user_img.'" alt="testimonial-img" width="90px" height="90px">
                            </div>
                            <div class="testimonial__items--content">
                                <h3 class="testimonial__items--title">'.$user_name.'</h3>
                                <span class="testimonial__items--subtitle">fashion</span>
                                <p class="testimonial__items--desc"> '.$content.'</p>
                                '.$html_rating.'
                            </div>
                        </div>
                    </div>';
    }
?>
<main class="main__content_wrapper">
    <!-- Start slider section -->
    <section class="hero__slider--section">
        <div class="hero__slider--inner swiper">
            <div class="hero__slider--wrapper swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero__slider--items home1__slider--bg">
                        <div class="container-fluid">
                            <div class="hero__slider--items__inner">
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <div class="slider__content">
                                            <p class="slider__content--desc desc1 mb-15"><img class="slider__text--shape__icon" src="./view/assets/img/icon/text-shape-icon.png" alt="text-shape-icon">Bộ Sưu Tập Mới</p> 
                                            <h2 class="slider__content--maintitle h1">Bộ Sưu Tập Sách Tiếng Trung<br>
                                                Tuyệt Vời Nhất Năm 2023-2024</h2>
                                            <p class="slider__content--desc desc2 d-sm-2-none mb-40">
                                                Nhanh chóng mua ngay !</p>    
                                            <a class="slider__btn primary__btn" href="index.php?pg=shop">Mua Ngay
                                                <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                                <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="swiper-slide ">
                    <div class="hero__slider--items home1__slider--bg two">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="hero__slider--items__inner">
                                        <div class="slider__content">
                                            <p class="slider__content--desc desc1 mb-15"><img class="slider__text--shape__icon" src="./view/assets/img/icon/text-shape-icon.png" alt="text-shape-icon">Bộ Sưu Tập Mới</p> 
                                            <h2 class="slider__content--maintitle h1">Bộ Sưu Tập Thời Trang<br>
                                                Tuyệt Vời Nhất Năm 2023</h2>
                                            <p class="slider__content--desc desc2 d-sm-2-none mb-40 ">Giảm tới 40% các mặt hàng<br>
                                                Nhanh chóng mua ngay !</p>    
                                            <a class="primary__btn slider__btn" href="index.php?pg=shop">Mua Ngay
                                                <svg class="slider__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                                <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="hero__slider--items home1__slider--bg three">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-6">
                                    <div class="hero__slider--items__inner">
                                        <div class="slider__content text-center">
                                            <p class="slider__content--desc desc1 mb-15"><img class="slider__text--shape__icon" src="./view/assets/img/icon/text-shape-icon.png" alt="text-shape-icon">Bộ Sưu Tập Mới</p> 
                                            <h2 class="slider__content--maintitle h1">Bộ Sưu Tập Thời Trang<br>
                                                Tuyệt Vời Nhất Năm 2023</h2>
                                            <p class="slider__content--desc desc2 d-sm-2-none mb-40">Giảm tới 40% các mặt hàng<br>
                                                Nhanh chóng mua ngay !</p>    
                                            <a class="primary__btn slider__btn" href="index.php?pg=shop">Mua Ngay
                                                <svg class="slider__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                                                <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- <div class="swiper__nav--btn swiper-button-next"></div>
            <div class="swiper__nav--btn swiper-button-prev"></div> -->
        </div>
    </section>
    <!-- End slider section -->

    <!-- Start banner section -->
    <section class="banner__section section--padding">
       
    </section>
    <!-- End banner section -->

    <!-- Start product section -->
    <section class="product__section section--padding pt-0">
        <div class="container-fluid">
            <div class="section__heading text-center mb-35">
                <h2 class="section__heading--maintitle">SẢN PHẨM MỚI </h2>
            </div>
            <ul class="product__tab--one product__tab--primary__btn d-flex justify-content-center mb-50">
                <li class="product__tab--primary__btn__list active" data-toggle="tab" data-target="#featured">Đặc sắc</li>
                <li class="product__tab--primary__btn__list" data-toggle="tab" data-target="#trending">Xu hướng</li>
                <li class="product__tab--primary__btn__list" data-toggle="tab" data-target="#newarrival">Hàng mới về</li>
            </ul>
            <div class="tab_content">
                <div id="featured" class="tab_pane active show">
                    <div class="product__section--inner">
                        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                            <?=$html_best?>
                        </div>
                    </div>
                </div>
                <div id="trending" class="tab_pane">
                    <div class="product__section--inner">
                        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                            <?=$html_hot?>
                        </div>
                    </div>
                </div>
                <div id="newarrival" class="tab_pane">
                    <div class="product__section--inner">
                        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                            <?=$html_new?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product section -->

    <!-- Start deals banner section -->

    <!-- End deals banner section -->

    <!-- Start product section -->
    <section class="product__section section--padding pt-0">
        <div class="container-fluid">
            <div class="section__heading text-center mb-50">
                <h2 class="section__heading--maintitle">Bán chạy nhất </h2>
            </div>
            <div class="product__section--inner product__swiper--activation swiper">
                <div class="swiper-wrapper">
                    <?=$html_best2?>
                </div>
                <div class="swiper__nav--btn swiper-button-next"></div>
                <div class="swiper__nav--btn swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!-- End product section -->

    <!-- Start banner section -->
    
    <!-- End banner section -->


    <!-- Start blog section -->
    <section class="blog__section section--padding pt-0">
        <div class="container-fluid">
            <div class="section__heading text-center mb-40">
                <h2 class="section__heading--maintitle">Tin Tức</h2>
            </div>
            <div class="blog__section--inner blog__swiper--activation swiper">
                <div class="swiper-wrapper">
                    <?=$html_blog;?>
                </div>
                <div class="swiper__nav--btn swiper-button-next"></div>
                <div class="swiper__nav--btn swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!-- End blog section -->

</main>