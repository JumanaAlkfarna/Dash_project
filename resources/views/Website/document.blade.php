@extends('website.parent')

@section('title', 'document')


@section('styles')
<link rel="stylesheet" href="{{ asset('website/assets/css/finincial.css') }}">
<link rel="stylesheet" href="{{ asset('website/assets/css/document.css') }}">
<link rel="stylesheet" href="{{ asset('website/assets/css/responsive.css') }}">

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
                <div class="c two active"><i class="fa-regular fa-check"></i></div>
                <div class="c three active"></div>
            </div>

            <div class="progress">
                <div class="progress-bar " role="progressbar" aria-label="Basic example" aria-valuenow="75"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <div class="pages">
                <div class="one"> <a href="" class="active">معلومات الشراء</a> </div>
                <div class="two"> <a href="" class="active">معلومات مالية</a> </div>
                <div class="three"> <a href="" class="active fw-bolder">المستندات</a> </div>
            </div>
        </section>

        <div class="pe ">

            <!-- Start Form  -->
            <!-- Start Form  -->
            <section class="sails">
                <div class="allinputs">

                    <div class="note mb-4"> <i class="fa-sharp fa-solid fa-circle-info me-2 ps-2"></i> <span>يجب أن يكون
                            ملفك بصيغة pdf. ولا يزيد حجمه عن 10 ميغابايت</span>
                    </div>

                    <div class="input-box">
                        <label for="documents" class="input-label">كشف حساب مصرفي لمدة 6 أشهر (يمكنك إرفاق أكثر من
                            ملف)</label>
                        <div class="input-container_File bg">
                            <p id="" class="mt-3 me-4">اختر الملفات</p>
                            <input type="file" multiple id="documents" style="opacity: 0;" name="inputField"
                                onchange="handleFiles(this.files)">
                            <label for="documents" class="upload_file">
                                <i class="ms-3 fa-regular fa-arrow-up-from-bracket"></i> تحميل الملف
                            </label>
                        </div>
                    </div>

                    <div id="fileList" class="fileList">
                        <div class="file-item">
                            <div class="all">
                                <div class="data-item">
                                    <span>Dash (2).rar</span>
                                    <span>(10.05MB)</span>
                                </div>
                                <div class="img">
                                    <img src="http://127.0.0.1:8000/Website/assets/img/pdfIcon.png"
                                        style="width: 25px; height: 25px;">
                                </div>
                            </div>
                            <button class="close-button">✖</button>
                        </div>
                    </div>


                    <div class="input-box">
                        <label for="purchase-type" class="input-label"> شهادة الحساب البنكي للمنشأة</label>
                        <div class="input border">
                            <div class="all me-2">
                                <div class="data-item">
                                    <span>Dash (2).rar</span>
                                    <span>(10.05MB)</span>
                                </div>

                                <div class="img">
                                    <img src="http://127.0.0.1:8000/Website/assets/img/pdfIcon.png"
                                        style="width: 25px; height: 25px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="note  mb-3">
                        <i class="fa-sharp fa-solid fa-circle-info me-2 ps-2"></i>
                        <span>
                            في حال رغبتك بتعديل معلومات الحساب البنكي يرجى التواصل مع المسؤولين
                            <a href="">تواصل معنا</a>
                        </span>
                    </div>


                    <div class="input-box">
                        <label for="purchase-type" class="input-label"> شهادة ضريبة القيمة المضافة (آخر إقرار
                            ضريبي)</label>
                        <div class="input bg">
                            <div class="all me-2">
                                <div class="data-item">
                                    <span>Dash (2).rar</span>
                                    <span>(10.05MB)</span>
                                </div>

                                <div class="img">
                                    <img src="http://127.0.0.1:8000/Website/assets/img/pdfIcon.png"
                                        style="width: 25px; height: 25px;">
                                </div>
                                <button class="close-button">✖</button>

                            </div>
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="" class="input-label">القوائم المالية (يمكنك إرفاق أكثر من ملف) (اختياري)</label>
                        <div class="input-container_File ">
                            <p id="file-mm" class="mt-3 me-4">اختر الملف</p>
                            <input type="file" id="list_financial" multiple class="" style="opacity: 0;"
                                name="inputField" placeholder="اختر الملف" onchange="displaySelectedFile(this)">
                            <label for="list_financial" class="upload_file"> <i
                                    class="ms-3 fa-regular fa-arrow-up-from-bracket"></i> تحميل الملف </label>
                        </div>
                        <div class="note mt-2 mb-4">
                            <span>
                                يرجى إرفاق القوائم المالية لآخر سنة.
                            </span>
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="" class="input-label">الوثائق الداعمة (يمكنك إرفاق أكثر من ملف) (اختياري)</label>
                        <div class="input-container_File ">
                            <p id="file-ll" class="mt-3 me-4">اختر الملف</p>
                            <input type="file" id="doc_support" class="" style="opacity: 0;" name="inputField"
                                placeholder="اختر الملف" onchange="displaySelectedFile(this)">
                            <label for="doc_support" class="upload_file"> <i
                                    class="ms-3 fa-regular fa-arrow-up-from-bracket"></i>
                                تحميل الملف </label>
                        </div>
                        <div class="note mt-2 mb-4">
                            <span>
                                مثال: عقد التأسيس ،الإقرار الضريبي الربعي ،الإقرار الزكوي
                            </span>
                        </div>
                    </div>



                </div>
            </section>

            <div class="checkboxes">
                <p>
                    <span>
                        <input type="checkbox" name="" id="">
                    </span> أقر بعدم وجود تضارب مصالح بين المنشأة والمورد
                </p>
                <a href="">سياسة الاستخدام والخصوصية</a>
            </div>

            <div class="Next text-center mt-5">
                <button type="button " class="prev">
                    <a href="{{ route('website.financial') }}">
                        <i class="fa-solid fa-chevron-right"></i>
                        السابق
                    </a>
                </button>

                <button type="button">
                    <a href="">
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
    function handleFiles(files) {
            var fileList = document.getElementById("fileList");
            fileList.innerHTML = ""; // مسح القائمة الحالية

            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var fileSize = (file.size / 1024 / 1024).toFixed(2); // حساب حجم الملف بالميجابايت

                var listItem = document.createElement("div");
                listItem.className = "file-item";

                var allItem = document.createElement("div");
                allItem.className = "all";

                var DataItem = document.createElement("div");
                DataItem.className = "data-item";

                var fileName = document.createElement("span");
                fileName.textContent = file.name;

                var fileSizeLabel = document.createElement("span");
                fileSizeLabel.textContent = `(${fileSize}MB)`;

                var IconItem = document.createElement("div");
                IconItem.className = "img";

                var pdfIcon = document.createElement("img");
                pdfIcon.src = "{{ asset('Website/assets/img/pdfIcon.png') }}"; // صورة أيقونة PDF
                pdfIcon.style.width = "25px";
                pdfIcon.style.height = "25px";

                var closeButton = document.createElement("button");
                closeButton.innerHTML = "&#10006;"; // رمز الإغلاق "X"
                closeButton.className = "close-button";
                closeButton.addEventListener("click", function() {
                    deleteFile(this.parentElement);
                });

                DataItem.appendChild(fileName);
                DataItem.appendChild(fileSizeLabel);
                allItem.appendChild(DataItem);

                IconItem.appendChild(pdfIcon);
                allItem.appendChild(IconItem);
                listItem.appendChild(allItem);


                listItem.appendChild(closeButton);


                fileList.appendChild(listItem);
            }
        }

        function deleteFile(item) {
            var fileList = document.getElementById("fileList");
            fileList.removeChild(item);
        }



    function displaySelectedFile(input) {
    var fileMessage = document.getElementById('file-mm');

    if (input.files && input.files[0]) {
      var file = input.files[0];
      var fileName = file.name;
      var fileExtension = fileName.split('.').pop();

      fileMessage.textContent = fileName + ' (' + fileExtension + ')';
    } else {
      fileMessage.textContent = 'لا يوجد ملف مختار';
    }
  }

  function displaySelectedFile(input) {
    var fileMessage = document.getElementById('file-ll');

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
