@extends('layouts.master')

@section('content')
                    <div class="row">
                        <div class="col-sm-7 text">
                            <h1>مصنع ومخابز وحلويات النجاح</h1>
                            <div class="description">
                                <p>
                                    جمهورنا وعملائنا الكرام جميع فروعنا ترحب بكم ‫فشاركونا النجاح‬ 
                                </p>
                            </div>
                            <div class="top-big-link">
                                <a class="btn btn-link-1" href="/salespoints">نقاط بيع</a>
                                <a class="btn btn-link-2" href="/distributors">موزعون</a>
                            </div>
                        </div>

                        <div class="col-sm-5 form-box">
                            <img src="assets/img/alnajah_logo.png" alt="">
                        </div>
                    </div> <!-- end of row 2 -->

                    <div class="row">
                        
                        <div id="map-outer" class="col-md-12">
                          <div id="address" class="col-md-4">
                            <h2>المركز الرئيسي</h2>
                            <address>
                            <strong> طريق الملك فيصل</strong><br>
                                Al Kharsو Al Mubarraz<br>
                                ص.ب : 10059<br>
                                الرمز البريدي : 31982<br>
                                <abbr>رقم الهاتف:</abbr> 0135362222
                                
                               
                           </address>
                          </div>
                            <div id="map-container" class="col-md-8"></div>
                        </div><!-- /map-outer -->

                    </div><!-- end of row  -->
@endsection
