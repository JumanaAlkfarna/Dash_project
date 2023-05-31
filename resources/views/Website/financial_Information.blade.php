@extends('website.parent')

@section('title','Title')


@section('styles')
<link rel="stylesheet" href="{{asset('website/assets/css/finincial.css')}}">

@endsection

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


        {{-- content --}}
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
                <div class="c one active"><i class="fa-regular fa-check"></i></div>
                <div class="c two active"></div>
                <div class="c three"></div>
              </div>

              <div class="progress">
                <div class="progress-bar " role="progressbar" aria-label="Basic example" aria-valuenow="75"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <div class="pages">
                <div class="one"> <a href="" class="active">معلومات الشراء</a> </div>
                <div class="two"> <a href="" class="active">معلومات مالية</a> </div>
                <div class="three"> <a href="">المستندات</a> </div>
              </div>
            </section>

            <div class="pe">

              <!-- Start Form  -->
              <section class="sails">
                <div class="allinputs">
                  <div class="input-box">
                    <label for="purchase-type" class="input-label">الدخل السنوي بالريال السعودي </label>
                    <input type="text" id="purchase-type" class="input" placeholder="20,000 ر.س">
                  </div>
                  <div class="input-box">
                    <label for="purchase-type" class="input-label"> عدد الموظفين</label>
                    <input type="number" id="purchase-type" class="input" placeholder="17 ">
                  </div>
                  <div class="input-box">
                    <label for="purchase-type" class="input-label">الأصول الحالية <span><i
                          class="fa-sharp fa-solid fa-circle-info me-2 ps-2"></i></span> </label>
                    <input type="text" id="purchase-type" class="input" placeholder="17,000 ">
                  </div>
                  <div class="input-box">
                    <label for="purchase-type" class="input-label">المطالبات الحالية<span><i
                          class="fa-sharp fa-solid fa-circle-info me-2 ps-2"></i></span> </label>
                    <input type="text" id="purchase-type" class="input" placeholder="17,000 ">
                  </div>
                  <div class="input-box">
                    <label for="purchase-type" class="input-label">الموقع الإلكتروني <span>(اختياري)</span> </label>
                    <input type="text" id="purchase-type" class="input" placeholder="www.example.com ">
                  </div>
                </div>
                <div class="checkboxes">
                  <p> <span><input type="checkbox" name="" id=""></span> أوافق على إصدار سند لأمر كضمان شخصي للتمويل
                  </p>

                  <label for="mortgage-original" class="ms-4">هل تود رهن الأصل؟</label>
                  <input type="radio" id="mortgage-original-yes" name="mortgage-original" value="yes">
                  <label for="mortgage-original-yes">نعم</label>
                  <input type="radio" id="mortgage-original-no" name="mortgage-original" value="no">
                  <label for="mortgage-original-no">لا</label><br>

                  <label for="other-guarantees" class="ms-4">هل يوجد ضمانات اخرى؟</label>
                  <input type="radio" id="other-guarantees-yes" name="other-guarantees" value="yes">
                  <label for="other-guarantees-yes">نعم</label>
                  <input type="radio" id="other-guarantees-no" name="other-guarantees" value="no">
                  <label for="other-guarantees-no">لا</label><br>





                </div>

              </section>









              <div class="Next text-center mt-5">
                <button type="button " class="prev">
                  <a href="{{route('website.purchaes')}}">
                    <i class="fa-solid fa-chevron-right"></i>
                    السابق
                  </a>
                </button>

                <button type="button">
                  <a href="./financial_Information.html">
                    التالي
                    <i class="fa-solid fa-chevron-left me-4 "></i>
                  </a>
                </button>
              </div>

            </div>
            <!--  Purchases Information -->


            <!-- End Form  -->
          </section>
        </form>
        {{-- content --}}

@endsection


@section('scripts')
<script>
  function validateInput() {
    var input = document.getElementById("purchase-type").value;
    if (input < 1) {
      alert("الرجاء إدخال قيمة أكبر من أو تساوي 1");
      document.getElementById("myInput").value = 1;
    }
  }
</script>

@endsection

