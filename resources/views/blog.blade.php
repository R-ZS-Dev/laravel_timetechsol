<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/nav-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer-style.css') }}">
</head>
<body>
    <header>
        @include('component.nav')
    </header>

    <main>
        <div class='mtop'>
            <div class='Blog_View_Navbg'>
                <div class='move_center'>
                    <a class='link_hover' href="">Home</a>
                    <label class='slashcol'> / </label>
                    <label class='linkcol'>Blog</label>
                    <h2 class='latest_blog'>Latest Blog Posts</h2>
                </div>
            </div>
        </div>

        <div class='left_and_right'>
            <div class='left_side'>
                    <div class='pading'>
                    <Link class='remove_linking' href='/blog_detail'>
                        <div class='blog_one_view'>
                            <Image class='seo_new_img' src='/upload/image/seonews.png' height='60' width='400' ></Image>
                            <span class='view_seonews_btn'>
                                <button class='view_seonew_btn'>SEO News</button>
                            </span>
                            <h2 class='view_title'>Creativity lifey aspects think secret of great</h2>
                            <div class='icon_view_left'>
                                <div class='left_view_padd'>
                                    <span>
                                        <Image src='/upload/image/user.png' height='20' width='20' alt=''></Image> Lilian Corner
                                        <Image class='pad_view_threes' src='/upload/image/clock.png' height='20' width='20' alt=''></Image> March 15, 2019
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class='comment_linehr'></div>
                        <p class='blog_text_line_height'>
                            As a direct line to human feeling, empathic experience, genuine language and detail poetry is 
                            everything perspective.
                        </p>
                        <div>
                            <Link class='view_read_more' href='/'>Read More <span class='right_arrow'>→</span> </Link>
                            <span class='blog_com_img'>13</span>
                            <Image class='blog_com_img' src='/upload/image/blogcomment.png' height='30' width='30' alt=''></Image>
                        </div>
                    </Link>
                    </div>

                <div class='pading'>
                    <div class='blog_one_view'>
                        <Image class='seo_new_img' src='/upload/image/seonews.png' height='80' width='400' ></Image>
                        <span class='view_seonews_btn'>
                            <button class='view_seonew_btn'>SEO News</button>
                        </span>
                        <h2 class='view_title'>Creativity lifey aspects think secret of great</h2>
                        <div class='icon_view_left'>
                            <div class='left_view_padd'>
                                <span>
                                    <Image src='/upload/image/user.png' height='20' width='20' alt=''></Image> Lilian Corner
                                    <Image class='pad_view_threes' src='/upload/image/clock.png' height='20' width='20' alt=''></Image> March 15, 2019
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class='comment_linehr'></div>
                    <p class='blog_text_line_height'>
                        As a direct line to human feeling, empathic experience, genuine language and detail poetry is 
                        everything perspective.
                    </p>
                    <div>
                        <Link class='view_read_more' href='/'>Read More <span class='right_arrow'>→</span> </Link>
                        <span class='blog_com_img'>13</span>
                        <Image class='blog_com_img' src='/upload/image/blogcomment.png' height='30' width='30' alt=''></Image>
                    </div>
                </div>

                <div class='pading'>
                    <div class='blog_one_view'>
                        <Image class='seo_new_img' src='/upload/image/seonews.png' height='80' width='400' ></Image>
                        <span class='view_seonews_btn'>
                            <button class='view_seonew_btn'>SEO News</button>
                        </span>
                        <h2 class='view_title'>Creativity lifey aspects think secret of great</h2>
                        <div class='icon_view_left'>
                            <div class='left_view_padd'>
                                <span>
                                    <Image src='/upload/image/user.png' height='20' width='20' alt=''></Image> Lilian Corner
                                    <Image class='pad_view_threes' src='/upload/image/clock.png' height='20' width='20' alt=''></Image> March 15, 2019
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class='comment_linehr'></div>
                    <p class='blog_text_line_height'>
                        As a direct line to human feeling, empathic experience, genuine language and detail poetry is 
                        everything perspective.
                    </p>
                    <div>
                        <Link class='view_read_more' href='/'>Read More <span class='right_arrow'>→</span> </Link>
                        <span class='blog_com_img'>13</span>
                        <Image class='blog_com_img' src='/upload/image/blogcomment.png' height='30' width='30' alt=''></Image>
                    </div>
                </div>

                <div class='pading'>
                    <div class='blog_one_view'>
                        <Image class='seo_new_img' src='/upload/image/seonews.png' height='80' width='400' ></Image>
                        <span class='view_seonews_btn'>
                            <button class='view_seonew_btn'>SEO News</button>
                        </span>
                        <h2 class='view_title'>Creativity lifey aspects think secret of great</h2>
                        <div class='icon_view_left'>
                            <div class='left_view_padd'>
                                <span>
                                    <Image src='/upload/image/user.png' height='20' width='20' alt=''></Image> Lilian Corner
                                    <Image class='pad_view_threes' src='/upload/image/clock.png' height='20' width='20' alt=''></Image> March 15, 2019
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class='comment_linehr'></div>
                    <p class='blog_text_line_height'>
                        As a direct line to human feeling, empathic experience, genuine language and detail poetry is 
                        everything perspective.
                    </p>
                    <div>
                        <Link class='view_read_more' href='/'>Read More <span class='right_arrow'>→</span> </Link>
                        <span class='blog_com_img'>13</span>
                        <Image class='blog_com_img' src='/upload/image/blogcomment.png' height='30' width='30' alt=''></Image>
                    </div>
                    
                </div>
                <div class='pagniation'>
                    <div class='Blog_View_pagination'>
                        <div class='view_page_numbers'>
                            <span class='blog_pagniation'>1</span>
                            <span class='blog_pagniation'>2</span>
                            <span class='blog_pagniation'>3</span>
                            <span class='blog_pagniation'>4</span>
                        </div>
                    </div>
                </div>            
            </div>        
        </div>
    </main>
    <footer>
        @include('component.footer')
    </footer>
</body>
</html>