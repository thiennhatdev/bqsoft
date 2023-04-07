@extends('layouts.default')

@section('title')
Trang chủ
@endsection

@section('head')
  <link href="{{ asset('/css/homepage.css') }}" rel="stylesheet" />
@endsection

@section('content')
  <div class="homepage">
    <div class="homepage-inner">
      <div class="banner-parent">
        <div class='slider'>
          <div class="banner slide-inner">
            <div>
              <div class="banner-thumbnail">
                <img
                  class="banner-thumbnail-child"
                  alt=""
                  src="{{ asset('images/paint-banner.png') }}"
                />
              </div>
              <div class="banner-content">
                <div class="i-l-phn-container">
                  <p class="i-l-phn">ĐẠI LÝ PHÂN PHỐI</p>
                  <p class="i-l-phn">SƠN JOTUN</p>
                </div>
                <div class="cung-cp-sn">
                  Cung cấp sơn chính hãng uy tín lớn nhất tại miền trung Cung cấp
                  sơn chính hãng uy tín lớn nhất tại miền trung
                </div>
                <div class="banner-content-inner">
                  <div class="lin-h-ngay-wrapper">
                    <div class="lin-h-ngay">LIÊN HỆ NGAY</div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="banner-thumbnail">
                <img
                  class="banner-thumbnail-child"
                  alt=""
                  src="{{ asset('images/paint-banner.png') }}"
                />
              </div>
              <div class="banner-content">
                <div class="i-l-phn-container">
                  <p class="i-l-phn">ĐẠI LÝ PHÂN PHỐI</p>
                  <p class="i-l-phn">SƠN JOTUN</p>
                </div>
                <div class="cung-cp-sn">
                  Cung cấp sơn chính hãng uy tín lớn nhất tại miền trung Cung cấp
                  sơn chính hãng uy tín lớn nhất tại miền trung
                </div>
                <div class="banner-content-inner">
                  <div class="lin-h-ngay-wrapper">
                    <div class="lin-h-ngay">LIÊN HỆ NGAY</div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="banner-thumbnail">
                <img
                  class="banner-thumbnail-child"
                  alt=""
                  src="{{ asset('images/paint-banner.png') }}"
                />
              </div>
              <div class="banner-content">
                <div class="i-l-phn-container">
                  <p class="i-l-phn">ĐẠI LÝ PHÂN PHỐI</p>
                  <p class="i-l-phn">SƠN JOTUN</p>
                </div>
                <div class="cung-cp-sn">
                  Cung cấp sơn chính hãng uy tín lớn nhất tại miền trung Cung cấp
                  sơn chính hãng uy tín lớn nhất tại miền trung
                </div>
                <div class="banner-content-inner">
                  <div class="lin-h-ngay-wrapper">
                    <div class="lin-h-ngay">LIÊN HỆ NGAY</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="banner-arrow">
            <img
              id="prev"
              class="banner-arrow-child icon-arrow_back"
              alt="icon-arrow-left"
              src="{{ asset('images/icons/ic-arrow-left.svg') }}"
            /><img
              id="next"
              class="banner-arrow-child icon-arrow_forward"
              alt="icon-arrow-right"
              src="{{ asset('images/icons/ic-arrow-right.svg') }}"
            />
          </div>
        </div>

        <div class='wrap-search-product'>
          <div class='search-product'>
            <input type='text' placeholder="Tìm kiếm sản phẩm sơn" />
            <img alt='icon-search' src="{{ asset('images/icons/ic-search.svg') }}" />
          </div>
          <button>Tìm</button>
        </div>

        @foreach($paints as $key => $paint)
          {{-- group slider --}}
          <div class="group-parent5">
            <div class="vector-parent">
              <div class="rectangle-parent10">
                <div class='rectangle-parent10-inner'>
                  <div class='paint-category-title'>
                    <img alt='star' src="{{ asset('images/icons/ic-star-white.svg') }}" />
                    <div class="sn-ngoi-tht">{{ $paint[0]->categoriesName }}</div>
                  </div>
                </div>
              </div>
              <div class="category-right-head"> </div>
            </div>
            <div class="instance-container">
              <div class='carousel parent-carasel-{{ $key }}'>
                <div class=" carousel-content">
                  @foreach($paint as $paintProduct)
                    <div class="product-list__item slide">
                      <div class="product frame-parent44 ">
                        <div class="rectangle-parent11">
                          <img
                            class="frame-child12"
                            alt="{{ $paintProduct->title }}"
                            src="{{ $paintProduct->image('thumbnail', 'default') }}"
                          />
                        </div>
                        <a href="#" class="sn-alex-ngoi4" title="{{ $paintProduct->title }}">
                          {{ $paintProduct->title }}
                        </a>
                        <div class='product-specifications-color'>
                          <div class='product-specifications'>{{ $paintProduct->specifications }}</div>
                          <div class='product-color'>{{ $paintProduct->color }}</div>
                        </div>
                        <div class="frame4">
                          <div class="logo10">{{ number_format($paintProduct->sell_price, 0, '.', '.') }} vnđ</div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                  {{-- <div class="product-list__item slide">
                    <div class="product frame-parent44 ">
                      <div class="rectangle-parent11">
                        <img
                          class="frame-child12"
                          alt=""
                          src="./public/rectangle-74@2x.png"
                        />
                        <div class="ellipse-parent2">
                          <img
                            class="frame-child13"
                            alt=""
                            src="./public/ellipse-24.svg"
                          />
                          <div class="kg4">45 kg</div>
                        </div>
                      </div>
                      <div class="sn-alex-ngoi4">
                        Sơn Alex ngoại thất chống nóng hiệu quả
                      </div>
                      <div class="frame4">
                        <div class="logo10">1.000.000 vnđ</div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-list__item slide">
                    <div class="product frame-parent44">
                      <div class="rectangle-parent11">
                        <img
                          class="frame-child12"
                          alt=""
                          src="./public/rectangle-74@2x.png"
                        />
                        <div class="ellipse-parent2">
                          <img
                            class="frame-child13"
                            alt=""
                            src="./public/ellipse-24.svg"
                          />
                          <div class="kg4">45 kg</div>
                        </div>
                      </div>
                      <div class="sn-alex-ngoi4">
                        Sơn Alex ngoại thất chống nóng hiệu quả
                      </div>
                      <div class="frame4">
                        <div class="logo10">1.000.000 vnđ</div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-list__item slide">
                    <div class="product frame-parent44">
                      <div class="rectangle-parent11">
                        <img
                          class="frame-child12"
                          alt=""
                          src="./public/rectangle-74@2x.png"
                        />
                        <div class="ellipse-parent2">
                          <img
                            class="frame-child13"
                            alt=""
                            src="./public/ellipse-24.svg"
                          />
                          <div class="kg4">45 kg</div>
                        </div>
                      </div>
                      <div class="sn-alex-ngoi4">
                        Sơn Alex ngoại thất chống nóng hiệu quả
                      </div>
                      <div class="frame4">
                        <div class="logo10">1.000.000 vnđ</div>
                      </div>
                    </div>
                  </div>
                  <div class="product-list__item slide">
                    <div class="product frame-parent44 ">
                      <div class="rectangle-parent11">
                        <img
                          class="frame-child12"
                          alt=""
                          src="./public/rectangle-74@2x.png"
                        />
                        <div class="ellipse-parent2">
                          <img
                            class="frame-child13"
                            alt=""
                            src="./public/ellipse-24.svg"
                          />
                          <div class="kg4">45 kg</div>
                        </div>
                      </div>
                      <div class="sn-alex-ngoi4">
                        Sơn Alex ngoại thất chống nóng hiệu quả
                      </div>
                      <div class="frame4">
                        <div class="logo10">1.000.000 vnđ</div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-list__item slide">
                    <div class="product frame-parent44">
                      <div class="rectangle-parent11">
                        <img
                          class="frame-child12"
                          alt=""
                          src="./public/rectangle-74@2x.png"
                        />
                        <div class="ellipse-parent2">
                          <img
                            class="frame-child13"
                            alt=""
                            src="./public/ellipse-24.svg"
                          />
                          <div class="kg4">45 kg</div>
                        </div>
                      </div>
                      <div class="sn-alex-ngoi4">
                        Sơn Alex ngoại thất chống nóng hiệu quả
                      </div>
                      <div class="frame4">
                        <div class="logo10">1.000.000 vnđ</div>
                      </div>
                    </div>
                  </div>
                  <div class=" product-list__item slide">
                    <div class="product frame-parent44">
                      <div class="rectangle-parent11">
                        <img
                          class="frame-child12"
                          alt=""
                          src="./public/rectangle-74@2x.png"
                        />
                        <div class="ellipse-parent2">
                          <img
                            class="frame-child13"
                            alt=""
                            src="./public/ellipse-24.svg"
                          />
                          <div class="kg4">45 kg</div>
                        </div>
                      </div>
                      <div class="sn-alex-ngoi4">
                        Sơn Alex ngoại thất chống nóng hiệu quả
                      </div>
                      <div class="frame4">
                        <div class="logo10">1.000.000 vnđ</div>
                      </div>
                    </div>
                  </div> --}}
                </div>
              
                <div class='wrap-navigate-slide'>
                  <div>
                    <img class="nav-left" alt='icon-arrow-left' src="{{ asset('images/icons/ic-arrow-left.svg') }}" />
                  </div>
                  <div>
                    <img class="nav-right" alt='icon-arrow-right' src="{{ asset('images/icons/ic-arrow-right.svg') }}" />
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          {{-- group slider --}}
        @endforeach
       
        <div class='paint-appendix'>
          <div>
            {{-- <img alt='star' src="{{ asset('images/icons/ic-star.svg') }}" /> --}}
            <p>* Bảng giá sơn đã bao gồm 10% thuế VAT & áp dụng cho sơn trắng.</p>
          </div>
          
          <div>
            {{-- <img alt='star' src="{{ asset('images/icons/ic-star.svg') }}" /> --}}
            <p>* Sơn pha màu sẽ được tính theo giá thực tế dựa trên máy pha màu.</p>
          </div>
        </div>
        <div class="frame-wrapper7">
          <div class="rectangle-parent30">
            <img
              class="frame-child44"
              alt="son-nha-gia-re"
              src="{{ asset('images/banner2.jpeg') }}"
            />
            <div class="bn-ang-cn-sn-nh-parent">
              <div class="bn-ang-cn">Bạn đang cần sơn nhà ?</div>
              <img
                class="frame-child45"
                alt="son-nha-gia-re"
                src="{{ asset('images/icons/ic-finger-down.svg') }}"
              />
              <div class="lin-h-ngay-container">
                <div class="lin-h-ngay1">LH: 0705.550.553</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="price-table">
      <div class="real-image-list">
        <div class="real-image-list-child"></div>
        <div class="image-list">
          <div class="instance-parent4">
            <div class="frame-parent60">
              <div class="cc-loi-sn-jotun-wrapper">
                <div class="cc-loi-sn-1">Hình ảnh thi công thực tế</div>
              </div>
            </div>
            <div class="mt-s-hnh">
              Một số hình ảnh công trình tiêu biểu đã thi công
            </div>
          </div>
          <div class="frame-parent61">
            <div class="frame-parent62">
              <div class="rectangle-parent31">
                <img
                  class="frame-child46"
                  alt="thi-cong-son-tai-da-nang"
                  src="{{ asset('images/thi-cong-son-tai-da-nang-1.jpg') }}"
                />
                <div class="frame-parent63">
                  <div class="rectangle-parent32">
                    <img
                      class="frame-child47"
                      alt="thi-cong-son-tai-da-nang"
                      src="{{ asset('images/thi-cong-son-tai-da-nang-2.jpg') }}"
                    /><img
                      class="frame-child47"
                      alt="thi-cong-son-tai-da-nang"
                      src="{{ asset('images/thi-cong-son-tai-da-nang-3.jpg') }}"
                    />
                  </div>
                  <div class="rectangle-parent32">
                    <img
                      class="frame-child46"
                      alt="thi-cong-son-tai-da-nang"
                      src="{{ asset('images/thi-cong-son-tai-da-nang-4.jpg') }}"
                    /><img
                      class="frame-child46"
                      alt="thi-cong-son-tai-da-nang"
                      src="{{ asset('images/thi-cong-son-tai-da-nang-5.jpg') }}"
                    />
                  </div>
                </div>
              </div>
              <div class="frame-parent64">
                <div class="rectangle-parent34">
                  <img
                    class="frame-child47"
                    alt="thi-cong-son-tai-da-nang"
                    src="{{ asset('images/thi-cong-son-tai-da-nang-6.jpg') }}"
                  /><img
                    class="frame-child47"
                    alt="thi-cong-son-tai-da-nang"
                    src="{{ asset('images/thi-cong-son-tai-da-nang-1.jpg') }}"
                  />
                </div>
                <div class="rectangle-parent34">
                  <img
                    class="frame-child47"
                    alt="thi-cong-son-tai-da-nang"
                    src="{{ asset('images/thi-cong-son-tai-da-nang-2.jpg') }}"
                  /><img
                    class="frame-child47"
                    alt="thi-cong-son-tai-da-nang"
                    src="{{ asset('images/thi-cong-son-tai-da-nang-3.jpg') }}"
                  />
                </div>
              </div>
            </div>
            <div class="xem-thm-parent">
              <div class="xem-thm">Xem thêm</div>
              <img
                class="arrow-right-icon"
                alt=""
                src="{{ asset('images/icons/ic-view-more.svg') }}"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="polygon-parent">
        <div class='price-table-content'>
          <h3>Với kinh nghiệm 10 năm trong nghề</h3>
          <p>Sứ mệnh của chúng tôi là đem đến sự hài lòng tuyệt đối cho khách hàng</p>
        </div>
        <div class="frame-wrapper8">
          <div class="frame-wrapper9">
            <div class="group-parent9">
              <div class="baogia1-2-parent">
                <div class="bng-bo-gi-thi-cng-sn-v-t-parent">
                  <div class="frame-parent60">
                    <div class="cc-loi-sn-jotun-wrapper">
                      <div class="cc-loi-sn">Bảng giá thi công thạch cao</div>
                    </div>
                    
                  </div>
                  
                  {{-- <div class="bng-bo-gi">
                    Bảng báo giá thi công sơn và trần thạch cao
                  </div> --}}
                </div>
                <img
                  class="baogia1-1-icon"
                  alt=""
                  src="{{ asset('images/bao-gia-son-1.png') }}"
                />
              </div>
              
              <div class="baogia1-1-parent">
                <div class="bng-bo-gi-thi-cng-sn-v-t-parent">
                  <div class="frame-parent60">
                    <div class="cc-loi-sn-jotun-wrapper">
                      <div class="cc-loi-sn">Bảng giá thi công sơn</div>
                    </div>
                  </div>
                </div>
                <img
                  class="baogia1-2-icon"
                  alt=""
                  src="{{ asset('images/bao-gia-son-2.png') }}"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script src="{{ asset('js/slider.js') }}"></script>
@endsection




