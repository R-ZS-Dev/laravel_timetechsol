<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/nav-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog-detail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog-detail-right.css') }}">
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
                <a class='link_hover' href='/'>Home</a> 
                <label class='slashcol'> / </label>
                <label class='linkcol'>Blog</label>
                <h2 class='latest_blog'>Real Data Management & Consulting</h2>
            </div>
        </div>
    </div>

    <div class='left_and_right'>
        <div class='left_side'>
            <div class='pading'>
                <div >
                    <Image class='seo_new_img' src='/upload/image/seeseo.jpg' height='420' width='500' alt=''></Image>
                </div>
                <span class='seo_new_btn'><button class='btn_seo_news'>SEO News</button></span>
                <div>
                    <h2 class='latest_blog1'>Real Data Management & Consulting</h2>
                </div>
                <div class='icon_div_width'>
                    <div class='icon_div_left'>
                        <div class='left_padd'>
                            <span class='bd_text_font'>
                            <Image class='pad_three' src='/upload/image/user.png' height='20' width='20' alt=''></Image> Lilian Corner
                            <Image class='pad_three' src='/upload/image/clock.png' height='20' width='20' alt=''></Image> March 15, 2019
                            <Image class='pad_three' src='/upload/image/comment.png' height='20' width='20' alt=''></Image> 13
                            </span>
                        </div>
                    </div>
                    <p class='icon_div_right'>
                        <Image class='soc_icon' src='/upload/image/fb.png' height='30' width='30' alt=''></Image>
                        <Image class='soc_icon' src='/upload/image/tw.png' height='30' width='30' alt=''></Image>
                        <Image class='soc_icon' src='/upload/image/gplus.png' height='30' width='30' alt=''></Image>
                        <Image class='soc_icon' src='/upload/image/ln.png' height='30' width='30' alt=''></Image>
                        <Image class='soc_icon' src='/upload/image/pn.png' height='30' width='30' alt=''></Image>
                    </p>
                </div>
            </div>
            <div class='linehr'></div>
            <div class='pading_left_right'>
                <p>As a direct line to human feeling, empathic experience, genuine language and detail poetry standard 
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to 
                    make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
                    typesetting, remaining essentiall year unchanged. It was popularised in the with the release of 
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                </p>
                <blockquote class='blockquote_css'>
                    Borem ipsum dolor sit amet, adhuc iriure dissentias est in, est ne diam graece tincidunt. Sit et liber 
                    minimum tacimates, sea no docAas mela mine.
                </blockquote>
                <div class='auth_name'>STEVEN WILLY</div>
                <p class='p_lin_height'>
                    As a direct line to human feeling, empathic experience, genuine language and detail poetry standard 
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to 
                    make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
                    typesetting, remaining essentiall year unchanged. It was popularised in the with the release of 
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                </p>
            </div>
            <div class='content_img_width'>
                    <div class='content_img_left'>
                        <h3 class='hthree'>Demonstrate The Differences</h3>
                        <p class='p_lin_height'>
                            Direct line to human feeling, empathic experience, genuine language and detail poetry standardummy 
                            text ever since t, when an unknown printer took a galley of type and scrambled it t a 
                            ypepecimen book. It has survived not onlcenturies, but also the leap into electronic 
                            tyessentiall year unchanged. It was popularised in the with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                        </p>
                    </div>
                    <div class='content_img_right'>
                        <span>
                            <Image class='content_img_sizing' src='/upload/image/blog24.jpg' height='250' width='150' alt=''></Image>
                        </span>
                    </div>
            </div>
            
            <div class='heading_two'>
                <div class='heading_two_text'>
                    What’s the goal you have when it comes to your website?
                </div>
                <p class='heading_line_height'>
                    Direct line to human feeling, empathic experience, genuine language and detail poetry standardummy 
                    text ever since t, when an unknown printer took a galley of type and scrambled it t a ypepecimen book. 
                    It has survived not onlcenturies, but also the leap into electronic tyessentiall year unchanged. It was 
                    popularised in the with the release of Letraset sheets containing and more.
                </p>                
                    
                <label class='heading_three_tick'>
                    <Image class='tick_icon' src='upload/image/tick.png' height='20' width='20' alt=''></Image>
                    Contrary to popular belief, Lorem Ipsum is not simply random text.
                </label>

                <div>
                    <label class='heading_three_tick'>
                        <Image class='tick_icon' src='upload/image/tick.png' height='20' width='20' alt=''></Image>
                        Eirmod perfecto id Nemore vivendo detey.
                    </label>
                </div>
                
                <label class='heading_three_tick'>
                    <Image class='tick_icon' src='upload/image/tick.png' height='20' width='20' alt=''></Image>
                    Survived not only five centuries
                </label>

                <p class='heading_line_height'>
                    Human feeling, empathic experience, genuine language and detail poetry standardummy text ever since 
                    t, when an unknown printer took a galley of type and scrambled it t a ypepecimen book. It has survived 
                    not onlcenturies, but also the leap into electronic tyessentiall year unchanged.
                </p>
            </div>
            <div class='linehr'></div>
            <div class='tag_padding'>
                <Image class='tag_img' src='/upload/image/tag.png' height='30' width='30'></Image>
                <Link class='tag_links' href=''>Analysis,</Link>
                <Link class='tag_links' href=''>Branding,</Link>
                <Link class='tag_links' href=''>Optimization</Link>
            </div>
            <div class='author_box'>
                <Image class='author_pic' src='/upload/image/authorpic.jpg' height='80' width='80' alt=''></Image>
                <div class='author_name'>
                    <label><strong class='author_nam'>Lora Zaman</strong>
                        <span class='author_icons'>
                            <Image class='auth_circle' src='/upload/image/fb.png' height='30' width='30' alt=''></Image>
                            <Image class='auth_circle' src='/upload/image/tw.png' height='30' width='30' alt=''></Image>
                            <Image class='auth_circle' src='/upload/image/ln.png' height='30' width='30' alt=''></Image>
                            <Image class='auth_circle' src='/upload/image/gplus.png' height='30' width='30' alt=''></Image>
                        </span>
                    </label>
                    <div>Author</div>
                    <p class='author_text'>
                        Dorem ipsum dolor sit amet, consectetuer adipiscing elit,sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.
                    </p>
                </div>
            </div>
            <div class='next_previous'>
                <div class='previous_side'>
                    <Image class='previous_radious' src='/upload/image/blog13.jpg' height='140' width='160' alt=''></Image>
                    <div class='previous_side_padding'>
                        <strong class='next_pre_tit'>How an Island Formsn And Stones</strong>
                        <div class='previous_topmargin'>
                            <Image class='previous_clock' src='/upload/image/clock.png' height='30' width='30'></Image>
                            <label class='previous_date'>July 15, 2019</label>
                            <div>
                                <button class='previous_post'>
                                    <label class='previous_left_arrow'>&lt;</label>Previous Post
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='next_side'>
                    <div class='right_half_width'>
                        <div class='right_width_less'>
                            <strong class='next_pre_tit'>How an Island Forms And Stones</strong>
                            <div>
                                <Image class='Next_clock' src='/upload/image/clock.png' height='30' width='30'></Image>
                                <label class='Next_date'> July 15, 2019</label>
                            </div>
                            <div>
                                <button class='Next_post'> Next Post
                                    <label class='Next_left_arrow'>&gt;</label>
                                </button>
                            </div>
                        </div>
                        <Image class='next_radious' src='/upload/image/blog13.jpg' height='140' width='160' alt=''></Image>
                    </div>
                </div>
            </div>
            <div class='comment_linehr'></div>

            <div class='comment_section'>
                <div>
                    <h3 class='comment_heading'><span>(03) </span>Event Discussion</h3>
                    <div class='comment_orangel_line'></div>
                    <div class='comment_reply'>
                        <div class='comment_right_side'>
                            <Image class='com_img_radius' src='/upload/image/user1.jpg' height='100' width='100'></Image>
                        </div>
                        <div class='comment_left_side'>
                            <strong>John Doe <Link class='comment_reply_right' href=''>Reply</Link></strong>
                            <div>
                                <label htmlFor=''>November 16, 2018, 5:33 pm</label>
                            </div>
                            <p>
                                Ahen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                It has survived not only five centuries.
                            </p>
                        </div>
                    </div>
                    <div class='comment_reply1'>
                        <div class='comment_right_side'>
                            <Image class='com_img_radius' src='/upload/image/user2.jpg' height='100' width='100'></Image>
                        </div>
                        <div class='comment_left_side'>
                            <strong>Maria Jaman <Link class='comment_reply_right' href=''>Reply</Link></strong>
                            <div>
                                <label htmlFor=''>November 16, 2018, 5:33 pm</label>
                            </div>
                            <p>
                                Ahen an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                It has survived not only five centuries.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='comment_linehr'></div>

            <div class='write_comment'>
                <div>
                    <h3 class='comment_heading'>Write a Comments</h3>
                    <div class='comment_orangel_line'></div>
                </div>
                <div class='write_comm_form'>
                    <input class='comm_name' type='text' name='' placeholder='Name*' />
                    <input class='comm_name' type='text' name='' placeholder='Email*' />
                    <input class='comm_name' type='text' name='' placeholder='Website*' />
                    <textarea class='comm_textarea' rows='8' cols='50' placeholder='Type your Comment'></textarea>
                    <div>
                        <button class='comm_submit_btn'>SUBMIT NOW <span class='comm_arrow'>&gt;</span> </button>
                    </div>
                </div>
            </div>
        </div>

        <div class='right_side'>
            @include('component.blog-detail-right')
        </div>
    </div>
    </main>
    <footer class='footer-margin'>
        @include('component.footer')
    </footer>
</body>
</html>