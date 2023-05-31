@extends('website.parent')

@section('title','Purchase')


@section('styles')




@section('content')


        <!-- Header -->
        <section class="header pt-5 ">
          <h1>المشتريات</h1>
          <p class="mt-3"> <span class="page">المشتريات</span>
            <i class="fa-solid fa-chevron-left"></i>
            <span class="department"> إضافة مشروع</span>
          </p>
        </section>
        <!-- Header -->

       {{-- Content --}}
        <form action="">
          <section class="Purchases">
            <!--  Purchases Information -->
            <section class="score ">
              <p>الرجاء إكمال الخطوات التالية</p>
              <div class="num">
                <div class="one">1</div>
                <div class="two">2</div>
                <div class="three">3</div>
              </div>

              <div class="circles">
                <div class="c one active"></div>
                <div class="c two"></div>
                <div class="c three"></div>
              </div>

              <div class="progress">
                <div class="progress-bar " role="progressbar" aria-label="Basic example" aria-valuenow="75"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <div class="pages">
                <div class="one"> <a href="" class="active">معلومات الشراء</a> </div>
                <div class="two"> <a href="">معلومات مالية</a> </div>
                <div class="three"> <a href="">المستندات</a> </div>
              </div>
            </section>
            <!--  Purchases Information -->

            <div class="pe">
              <h3 class="">معلومات الشراء</h3>

              <!-- Start Form  -->
              <section class="sails">
                <div class="allinputs">
                  <div class="input-box">
                    <label for="purchase-type" class="input-label">نوع المشتريات</label>
                    <input type="text" id="purchase-type" class="input" placeholder="نوع المشتريات">
                  </div>

                  <div class="input-box">
                    <label for="" class="input-label">عرض السعر</label>
                    <div class="input-container_File">
                      <p id="file-message" class="mt-3 me-4">اختر الملف</p>
                      <input type="file" id="price-offer" class="" style="opacity: 0;" name="inputField"
                        placeholder="اختر الملف" onchange="displaySelectedFile(this)">
                      <label for="price-offer" class="upload_file"> <i
                          class="ms-3 fa-regular fa-arrow-up-from-bracket"></i> تحميل الملف </label>

                    </div>
                    <div class="note mt-2"> <i class="fa-sharp fa-solid fa-circle-info me-2 ps-2"></i> <span>يجب أن يكون
                        ملفك بصيغة pdf. ولا يزيد حجمه عن 10 ميغابايت</span></div>

                  </div>

                  <div class="input-box">
                    <label for="purchase-type" class="input-label">مبلغ المشتريات بالريال السعودي </label>
                    <input type="text" id="purchase-type" class="input" placeholder="مثال: 350,000">

                    <p class="example mt-2 pe-2">مبلغ المشتريات للمنشأة من 100 ألف ريال سعودي إلى 500 ألف ريال سعودي</p>

                  </div>


                  <div class="input-box">
                    <label class="input-label"> فترة السداد بالأشهر</label>
                    <div class="input-container">
                      <select id="payment-period" name="paymentPeriod" class="input ">
                        <option value="122" disabled selected>اختر فترة السداد</option>
                        <option value="1">شهر واحد</option>
                        <option value="3">ثلاثة أشهر</option>
                        <option value="6">ستة أشهر</option>
                        <option value="12">سنة واحدة</option>
                      </select>


                    </div>

                  </div>

                </div>
              </section>

              <!-- Start Approximate monthly installment calculator -->
              <div class="price-container ">
                <p class="title">حاسبة القسط الشهري التقريبية</p>
                <div class="items">
                  <div class="item">
                    <p class="text">مبلغ المشتريات</p>
                    <p class="price">00.0 <span>رس</span></p>
                  </div>
                  <div class="separator item">+</div>
                  <div class="item">
                    <p class="text">المرابحة</p>
                    <p class="price">00.0 <span>رس</span></p>
                  </div>
                  <div class="separator item">=</div>
                  <div class="item">
                    <p class="text">المبلغ الكلي</p>
                    <p class="price">00.0 <span>رس</span></p>
                  </div>
                </div>

                <div class="additional-text">
                  <div class="additional-info">
                    <span>القسط الشهري:</span>
                    <a href="#" class="additional-link">تطبيق الشروط والأحكام</a>

                    <p class="price">0.00 <span>رس</span></p>
                  </div>

                  <div class="additional-info">
                    <span>الرسوم الإدارية:</span>
                    <a href="#" class="additional-link">تطبيق الشروط والأحكام </a>
                    <p class="price">0.00 <span>رس</span></p>
                  </div>
                </div>



              </div>
              <!-- End Approximate monthly installment calculator -->

              <div class="infoSupplier mt-5">
                <h3 class="mb-4">معلومات المورد</h3>
                <div class="input-box ">
                  <label class="input-label"> اختر من الموردين</label>
                  <div class="input-container mt-3">
                    <select id="payment-period" name="paymentPeriod" class="input " placeholder="jksl">
                      <option value="122" disabled selected>اختر من الموردين</option>
                      <option value="1">شهر واحد</option>
                      <option value="3">ثلاثة أشهر</option>
                      <option value="6">ستة أشهر</option>
                      <option value="12">سنة واحدة</option>
                    </select>


                  </div>

                  <div class="all mt-3">
                    <div class="box_sec2">
                      <div class="icon text-right">
                        <i class="fa-light fa-pen-to-square ms-3"></i>
                        <i class="fa-light fa-trash-can"></i>
                      </div>
                      <div class="info_supp">
                        <p class="title">بيانات المورد</p>

                        <div class="items">
                          <div class="item">
                            <p class="text">اسم المنشاة الموردة</p>
                            <p class="name">خديجة محمد</p>
                          </div>
                          <div class="item">
                            <p class="text">اسم المسؤول</p>
                            <p class="name">خديجة محمد</p>
                          </div>
                          <div class="item">
                            <p class="text">القطاع</p>
                            <p class="name">اسم القطاع</p>
                          </div>
                        </div>

                      </div>

                      <div class="info_contact items">
                        <p class="title">بيانات التواصل</p>
                        <div class="cumu">
                          <div class="comuu mb-3">
                            <a href=""> <i class="fa-solid fa-phone-flip"></i> <span>+966 7655 6666</span></a>
                            <a href=""> <i class="fa-solid fa-envelope"></i> <span>khadija-ahmed@gmail.com</span> </a>


                          </div>
                        </div>
                      </div>

                      <div class="attachments">
                        <p class="title"> المرفقات</p>
                        <div class="cumu">
                          <div class="comuu">
                            <p class="link">
                              <span><i class="fa-thin fa-link"></i></span>
                              <a href="" class="link d-inline-block">
                                شهادة الحساب البنكي للمورد
                              </a>
                            </p>

                          </div>
                        </div>
                      </div>

                    </div>


                  </div>

                </div>

              </div>


              <div class="Next text-center mt-5">
                <button type="button">
                  <a href="{{route('website.financial')}}">التالي <i class="fa-solid fa-chevron-left me-4 "></i>
                  </a>
                </button>
              </div>
            </div>

            <!-- End Form  -->
          </section>
        </form>
       {{-- Content --}}




@endsection





@section('scripts')
<script>
  function displaySelectedFile(input) {
    var fileMessage = document.getElementById('file-message');

    if (input.files && input.files[0]) {
      var file = input.files[0];
      var fileName = file.name;
      var fileExtension = fileName.split('.').pop();

      fileMessage.textContent = fileName + ' (' + fileExtension + ')';
    } else {
      fileMessage.textContent = 'لا يوجد ملف مختار';
    }
  }




</script>

@endsection

