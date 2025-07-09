<!DOCTYPE html>
<html lang="ar" dir="rtl" data-theme="slack">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="m-4 space-y-4">
        <div class="input-floating w-96">
            <input type="text" placeholder="الكاتو" class="input" id="floatingInput" />
            <label class="input-floating-label" for="floatingInput">الاسم الكامل</label>
        </div>
        <div>
            <label>
                الجنس
            </label>
            <div class="flex items-center gap-1">
                <input type="radio" name="radio-0" class="radio" id="defaultRadio1" />
                <label class="label-text text-base" for="defaultRadio1">ذكر</label>
            </div>
            <div class="flex items-center gap-1">
                <input type="radio" name="radio-0" class="radio" id="defaultRadio2" />
                <label class="label-text text-base" for="defaultRadio2">أنثى</label>
            </div>
        </div>
        <div class="select-floating w-96">
            <select class="select" aria-label="Select floating label" id="selectFloating">
                <option selected disabled>اضغط للاختيار</option>
                <option>علوم حاسب</option>
                <option>هندسة البرمجيات</option>
                <option>هندسة الحاسب</option>
            </select>
            <label class="select-floating-label" for="selectFloating">التخصص</label>
        </div>
        <div class="flex items-center gap-1">
            <input type="checkbox" class="switch" id="defaultSwitch1" />
            <label class="label-text text-base" for="defaultSwitch1">عجبك الفرونت؟</label>
        </div>
</body>

</html>