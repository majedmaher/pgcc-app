<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="{{isset($description) ?? $description}}">
        <meta name="keywords" content="{{isset($keywords) ?? $keywords}}">
        <meta name="author" content="Majed Maher">
        <link rel="shortcut icon" type="x-icon" href="{{asset('imgs/basic/logo.png')}}">
        <link rel="canonical" href="{{ url()->current() }}" />
    
        {{-- <link rel="stylesheet" href="{{asset('assets/frontend/style.min.css')}}" /> --}}
       <link rel="stylesheet" href="{{asset('assets/frontend/style.css')}}" />
        <title>{{isset($title) ? $title : "PGCC Company"}}</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      </head>
<body>
    {{-- <body {{app()->getLocale() == 'en' ? 'class=ltr' : ''}}> --}}
        <div class="header content position-fixed z-99">
            <div class="nav-header shadow w-100 d-flex flex-wrap justify-content-between align-items-center container pt-10 pb-10">
                <div class="menu-header d-none"></div>
                <div class="header-content w-100 d-flex justify-content-between align-items-center">
                    <div class="nav-logo">
                        <a href="#main">
                            <div class="logo-img">
                                <img src="{{asset('imgs/basic/logo.png')}}" alt="logo-pgcc" srcset="" loading="lazy" />
                            </div>
                        </a>
                    </div>
                    <div class="nav-content d-flex flex-wrap justify-content-between text-white">
                        <a href="#main" class="nav-link transition-duration-500">الرئيسية</a>
                        <a href="#main" class="nav-link transition-duration-500">من نحن</a>
                        <a href="#main" class="nav-link transition-duration-500">خدماتنا</a>
                        <a href="#main" class="nav-link transition-duration-500">شركاء النجاح</a>
                        <a href="#main" class="nav-link transition-duration-500">تواصل معنا</a>
                    </div>
                    <div class="nav-actions text-white">
                        <a href="https://digo.sa" target="_blank" rel="noopener noreferrer" class=" order-button transition-duration-500 text-secondary-hover bg-white-hover banner-order-btn-1">اطلب الان</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-box position-relative overflow-hidden">
            <div class="banner w-100 d-flex flex-column justify-content-center align-items-center text-white">
                <div class="scroll-down-icon z-1 position-absolute float-start-10">
                    <img src="{{asset('imgs/basic/go-to-down-icon.png')}}" alt="scroll-down" srcset="" loading="lazy" />
                </div>
                <div class="banner-title text-center">
    
                    <h1>نبني المستقبل بأيدينا، ونجعل رؤيتك واقعاً</h1>
                    <h2 class="tajawal-medium text-white">تقديم حلول إنشائية مبتكرة لضمان نجاح مشاريعك بكل احترافية.</h2>
                </div>
                <div class="banner-action-buttons d-flex  mt-50 gap-20 align-items-center">
                    <div class="banner-order-btn">
                        <a href="https://digo.sa" target="_blank" rel="noopener noreferrer" class="banner-order-btn-1 text-secondary-hover bg-white-hover transition-duration-500">اطلب خدمة</a>
                    </div>
                    <div class="banner-order-btn">
                        <a href="https://digo.sa" target="_blank" rel="noopener noreferrer"class="banner-order-btn-2 text-decoration-underline">تنزيل الملف التعريفي</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="analysis position-relative w-100 container border-box my-20 bg-section">
            <div class="analysis-items rounded d-flex flex-wrap gap-5 justify-content-between align-items-center border-box p-20">
                <div class="analysis-item d-flex flex-column align-items-center">
                    <div class="analysis-icon">
                        <img src="{{asset('imgs/basic/analysis-icon.png')}}" alt="analysis-icon" loading="lazy" />
                    </div>
                    <div class="analysis-title">
                        <span>+17</span>
                    </div>
                    <div class="analysis-description">
                        <span>سنة من الخبرة</span>
                    </div>
                </div>
                <div class="analysis-item d-flex flex-column align-items-center">
                    <div class="analysis-icon">
                        <img src="{{asset('imgs/basic/analysis-icon.png')}}" alt="analysis-icon" loading="lazy" />
                    </div>
                    <div class="analysis-title">
                        <span>+%20</span>
                    </div>
                    <div class="analysis-description">
                        <span> أسرع في التنفيذ</span>
                    </div>
                </div>
                <div class="analysis-item d-flex flex-column align-items-center">
                    <div class="analysis-icon">
                        <img src="{{asset('imgs/basic/analysis-icon.png')}}" alt="analysis-icon" loading="lazy" />
                    </div>
                    <div class="analysis-title">
                        <span>+10K</span>
                    </div>
                    <div class="analysis-description">
                        <span> مشروع مكتمل</span>
                    </div>
                </div>
                <div class="analysis-item d-flex flex-column align-items-center">
                    <div class="analysis-icon">
                        <img src="{{asset('imgs/basic/analysis-icon.png')}}" alt="analysis-icon" loading="lazy" />
                    </div>
                    <div class="analysis-title">
                        <span>+%95</span>
                    </div>
                    <div class="analysis-description">
                        <span>رضا العملاء عن خدماتنا</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us container bg-section">
            <div class="about-header d-flex flex-column">
                <h2>من نحن</h2>
                <h3 class="mt-10">نحن شركة سعودية رائدة في مجال المقاولات والإنشاءات، نمتلك خبرة واسعة في تقديم حلول بناء مبتكرة تلبي احتياجات عملائنا بكفاءة واحترافية، مع التركيز على الجودة والالتزام بالمواعيد</h3>
            </div>
            <div class="about-content mt-20 d-flex align-items-center">
                <div>
                    <div class="about-cards d-flex flex-column gap-20">
                        <div class="about-card d-flex">
                            <div class="card-icon">
                                <img src="{{asset('imgs/basic/card-icon.png')}}" alt="card-icon" loading="lazy" />
                            </div>
                            
                            <div class="card-desc">
                                <h3>تنفيذ المشاريع بجودة عالية</h3>
                                <h4>نعمل على تنفيذ المشاريع الإنشائية وفقًا لأعلى معايير الجودة لضمان رضا عملائنا وتجاوز توقعاتهم.</h4>
                            </div>
                        </div>
                        <div class="about-card d-flex ">
                            <div class="card-icon">
                                <img src="{{asset('imgs/basic/card-icon.png')}}" alt="card-icon" loading="lazy" />
                            </div>
                            
                            <div class="card-desc">
                                <h3>تنفيذ المشاريع بجودة عالية</h3>
                                <h4>نعمل على تنفيذ المشاريع الإنشائية وفقًا لأعلى معايير الجودة لضمان رضا عملائنا وتجاوز توقعاتهم.</h4>
                            </div>
                        </div>
                        <div class="about-card d-flex ">
                            <div class="card-icon">
                                <img src="{{asset('imgs/basic/card-icon.png')}}" alt="card-icon" loading="lazy" />
                            </div>
                            
                            <div class="card-desc">
                                <h3>تنفيذ المشاريع بجودة عالية</h3>
                                <h4>نعمل على تنفيذ المشاريع الإنشائية وفقًا لأعلى معايير الجودة لضمان رضا عملائنا وتجاوز توقعاتهم.</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-desc">
                    <h2>ما الذي يميز بيئة عملنا؟</h2>
                    <h3 class="text-start mt-20">نحن نؤمن بأن بيئة العمل تلعب دوراً كبيراً في تحقيق التميز والجودة. نقدم لعملائنا فريق عمل متميز ومجهز بأحدث التقنيات والمعدات لضمان تنفيذ المشاريع بكفاءة عالية. بفضل خبرتنا في التعامل مع المشاريع الكبرى وقدرتنا على تقديم حلول مبتكرة، نضمن تحقيق أفضل النتائج وفقاً لأعلى معايير الجودة.</h3>
                </div>
            </div>
        </div>

        <div class="services container">
            <div class="services-header d-flex flex-column">
                <h2>خدماتنا</h2>
                <h3 class="mt-10">نقدم مجموعة واسعة من الخدمات المتكاملة لتلبية جميع احتياجات مشاريعك.</h3>
            </div>
            <div class="services-content d-flex flex-wrap gap-20 mt-20">
                <div class="service-item">
                    <div class="service-content text-white">
                        <div class="service-icon">
                            <img src="{{asset('imgs/basic/card-icon.png')}}" alt="service-icon" loading="lazy">
                        </div>
                        <h3 class="service-title text-white text-start mt-10">أعمال الحديد</h3>
                        <h4 class="service-desc text-start mt-10">هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر. هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر.</h4>
                    </div>
                    <div class="service-order mt-10">
                        <a href="https://digo.sa" target="_blank" rel="noopener noreferrer">اطلب خدمة</a>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-content text-white">
                        <div class="service-icon">
                            <img src="{{asset('imgs/basic/card-icon.png')}}" alt="service-icon" loading="lazy">
                        </div>
                        <h3 class="service-title text-white text-start mt-10">أعمال الحديد</h3>
                        <h4 class="service-desc text-start mt-10">هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر. هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر.</h4>
                    </div>
                    <div class="service-order mt-10">
                        <a href="https://digo.sa" target="_blank" rel="noopener noreferrer">اطلب خدمة</a>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-content text-white">
                        <div class="service-icon">
                            <img src="{{asset('imgs/basic/card-icon.png')}}" alt="service-icon" loading="lazy">
                        </div>
                        <h3 class="service-title text-white text-start mt-10">أعمال الحديد</h3>
                        <h4 class="service-desc text-start mt-10">هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر. هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر.</h4>
                    </div>
                    <div class="service-order mt-10">
                        <a href="https://digo.sa" target="_blank" rel="noopener noreferrer">اطلب خدمة</a>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-content text-white">
                        <div class="service-icon">
                            <img src="{{asset('imgs/basic/card-icon.png')}}" alt="service-icon" loading="lazy">
                        </div>
                        <h3 class="service-title text-white text-start mt-10">أعمال الحديد</h3>
                        <h4 class="service-desc text-start mt-10">هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر. هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر.</h4>
                    </div>
                    <div class="service-order mt-10">
                        <a href="https://digo.sa" target="_blank" rel="noopener noreferrer">اطلب خدمة</a>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-content text-white">
                        <div class="service-icon">
                            <img src="{{asset('imgs/basic/card-icon.png')}}" alt="service-icon" loading="lazy">
                        </div>
                        <h3 class="service-title text-white text-start mt-10">أعمال الحديد</h3>
                        <h4 class="service-desc text-start mt-10">هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر. هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر.</h4>
                    </div>
                    <div class="service-order mt-10">
                        <a href="https://digo.sa" target="_blank" rel="noopener noreferrer">اطلب خدمة</a>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-content text-white">
                        <div class="service-icon">
                            <img src="{{asset('imgs/basic/card-icon.png')}}" alt="service-icon" loading="lazy">
                        </div>
                        <h3 class="service-title text-white text-start mt-10">أعمال الحديد</h3>
                        <h4 class="service-desc text-start mt-10">هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر. هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر.</h4>
                    </div>
                    <div class="service-order mt-10">
                        <a href="https://digo.sa" target="_blank" rel="noopener noreferrer">اطلب خدمة</a>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-content text-white">
                        <div class="service-icon">
                            <img src="{{asset('imgs/basic/card-icon.png')}}" alt="service-icon" loading="lazy">
                        </div>
                        <h3 class="service-title text-white text-start mt-10">أعمال الحديد</h3>
                        <h4 class="service-desc text-start mt-10">هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر. هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر.</h4>
                    </div>
                    <div class="service-order mt-10">
                        <a href="https://digo.sa" target="_blank" rel="noopener noreferrer">اطلب خدمة</a>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-content text-white">
                        <div class="service-icon">
                            <img src="{{asset('imgs/basic/card-icon.png')}}" alt="service-icon" loading="lazy">
                        </div>
                        <h3 class="service-title text-white text-start mt-10">أعمال الحديد</h3>
                        <h4 class="service-desc text-start mt-10">هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر. هنا يمكنك تضمين وصف موجز للعنوان في أربعة أسطر.</h4>
                    </div>
                    <div class="service-order mt-10">
                        <a href="https://digo.sa" target="_blank" rel="noopener noreferrer">اطلب خدمة</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="partners container bg-section">
            <div class="partners-header d-flex flex-column">
                <h2>شركاء النجاح</h2>
                <h3 class="mt-10">نقدم مجموعة واسعة من الخدمات المتكاملة لتلبية جميع احتياجات مشاريعك.</h3>
            </div>
            <div class="partnerts-carousel mt-10">
                <div class="owl-carousel owl-theme">
                    <div class="item"><img src="{{asset('imgs/basic/partner-logo.png')}}" alt=""></div>
                    <div class="item"><img src="{{asset('imgs/basic/partner-logo.png')}}" alt=""></div>
                    <div class="item"><img src="{{asset('imgs/basic/partner-logo.png')}}" alt=""></div>
                    <div class="item"><img src="{{asset('imgs/basic/partner-logo.png')}}" alt=""></div>
                    <div class="item"><img src="{{asset('imgs/basic/partner-logo.png')}}" alt=""></div>
                    <div class="item"><img src="{{asset('imgs/basic/partner-logo.png')}}" alt=""></div>
                    <div class="item"><img src="{{asset('imgs/basic/partner-logo.png')}}" alt=""></div>
                </div>
                
            </div>
        </div>

        <div class="contact container d-flex">
            <div class="contact-form d-flex flex-column">
                <div class="contact-header">
                    <h2 class="text-start">تواصل معنا</h2>
                    <h3 class="text-start mt-20">إذا كان لديك أي استفسار أو تحتاج إلى استشارة بشأن مشروعك، لا تتردد في التواصل معنا. نحن هنا لمساعدتك في تحقيق رؤيتك الإنشائية بأفضل الحلول. اتصل بنا اليوم!</h3>
                </div>
                <div class="form h-100 mt-20">
                    <form class="h-100 d-flex justify-content-between flex-column" action="contact_submit" method="post">
                        <div class="row d-flex flex-wrap justify-content-between">
                            <div class="name-field">
                                <label for="name" class="name-label">الاسم</label>
                                <input type="text" class="w-100" name="name" id="name" placeholder="مثال: احمد شحده" />
                            </div>
                            <div class="phone-field">
                                <label for="number" class="phone-label">رقم الهاتف</label>
                                <div class="phone d-flex justify-content-start gap-3">
                                    <input class="number" type="number" name="phone_number" id="phone-number" placeholder="00 000 0000" />
                                    <select name="intro_phone" id="itro-phone">
                                        <option value="972">+972</option>
                                        <option value="970">+970</option>
                                        <option value="971">+971</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex flex-wrap justify-content-between">
                            <div class="email-field">
                                <label for="email" class="email-label">البريد الالكتروني</label>
                                <input type="email" class="w-100" name="email" id="email" placeholder="example@example.example" />
                            </div>
                            <div class="subject-field">
                                <label for="subject" class="subject-label">الموضوع</label>
                                <input type="number" class="w-100" name="subject" id="subject" placeholder="مثال: بناء مول تجاري" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="textarea-field">
                                <label for="textarea" class="textarea">كيف يمكننا المساعدة؟</label>
                                <textarea class="w-100" name="textarea" id="textarea" rows="10" placeholder="نص تلميحي"></textarea>
                            </div>
                        </div>
                        <div class="row buttons d-flex gap-20">
                            <button class="text-white bg-main" type="submit">ارسال</button>
                            <a href="https://whatsapp.com" target="_blank" rel="noopener noreferrer">أرسل رسالة علي الواتساب</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="contact-detail d-flex flex-column p-20">
                <h2 class="text-start">موقعنا</h2>
                <h4>نتشرف بتواجدك بيننا في أصول التعاون للمقاولات</h4>
                <iframe class="w-100 mt-10" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d115950.79797401329!2d46.67701!3d24.745329!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1742479256826!5m2!1sen!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="contact-logo text-center mt-10">
                <img class="w-30" src="{{asset('imgs/basic/logo-large.png')}}" alt="logo" loading="lazy" />
                </div>
            </div>
        </div>

        <div class="footer bg-main container d-flex flex-wrap justify-content-between">
            <div class="d-flex flex-wrap gap-10 align-items-center">
                <div class="footer-logo">
                    <img src="{{asset('imgs/basic/logo-large.png')}}" alt="footer-logo" loading="lazy" />
                </div>
                <div class="copyright d-flex justify-content-center flex-column text-white">
                    <h5>جميع الحقوق محفوظة لشركة أصول التعاون الخليجي للمقاولات © <span id="copyright">2025</span></h5>
                    <h6>تم تطويره وصيانته بواسطة ماجد زياره</h6>
                </div>
            </div>
            <div class="d-flex flex-column gap-10 text-white align-items-center">
                <h5>تابعنا على منصات التواصل الاجتماعي</h5>
                <hr class="opacity-30 w-100" />
                <div class="social-accounts d-flex flex-wrap justify-content-between gap-10">
                    <a href="https://www.github.com/majedmaher" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/facebook-icon.png')}}" alt="facebook-account"></a>
                    <a href="https://www.github.com/majedmaher" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/linkedIn-icon.png')}}" alt="linkedin-account"></a>
                    <a href="https://www.github.com/majedmaher" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/instagram-icon.png')}}" alt="instagram-account"></a>
                    <a href="https://www.github.com/majedmaher" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/x-icon.png')}}" alt="x-account"></a>
                    <a href="https://www.github.com/majedmaher" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/telegram-icon.png')}}" alt="telegram-account"></a>
                    <a href="https://www.github.com/majedmaher" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/whatsapp-icon.png')}}" alt="whatsapp-account"></a>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{asset('assets/frontend/main.js')}}"></script>
</body>
</html>