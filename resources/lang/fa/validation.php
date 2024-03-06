<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */


    'yesterday' => 'دیروز',
    'accepted' => ':attribute باید پذیرفته شده باشد.',
    'active_url' => 'آدرس :attribute معتبر نیست.',
    'after' => 'تاریخ باید پس از امروز باشد',
    'after_or_equal' => ':attribute باید تاریخی بعد از :date، یا مطابق با آن باشد.',
    'alpha' => ':attribute باید فقط حروف الفبا باشد.',
    'alpha_dash' => ':attribute باید فقط حروف الفبا، اعداد، خط تیره و زیرخط باشد.',
    'alpha_num' => ':attribute باید فقط حروف الفبا و اعداد باشد.',
    'array' => ':attribute باید آرایه باشد.',
    'before' => ':attribute باید تاریخی قبل از :date باشد.',
    'before_or_equal' => ':attribute باید تاریخی قبل از :date، یا مطابق با آن باشد.',
    'between' => [
        'numeric' => ':attribute باید بین :min و :max باشد.',
        'file' => ':attribute باید بین :min و :max کیلوبایت باشد.',
        'string' => ':attribute باید بین :min و :max کاراکتر باشد.',
        'array' => ':attribute باید بین :min و :max آیتم باشد.',
    ],
    'boolean' => 'فیلد :attribute فقط می‌تواند true و یا false باشد.',
    'confirmed' => ':attribute با فیلد تکرار مطابقت ندارد.',
    'date' => ':attribute یک تاریخ معتبر نیست.',
    'date_format' => ':attribute با الگوی :format مطابقت ندارد.',
    'different' => ':attribute و :other باید از یکدیگر متفاوت باشند.',
    'digits' => ':attribute باید :digits رقم باشد.',
    'digits_between' => ':attribute باید بین :min و :max رقم باشد.',
    'dimensions' => 'ابعاد تصویر :attribute قابل قبول نیست.',
    'distinct' => 'فیلد :attribute مقدار تکراری دارد.',
    'email' => ':attribute باید یک ایمیل معتبر باشد.',
    'exists' => ':attribute انتخاب شده، معتبر نیست.',
    'file' => ':attribute باید یک فایل معتبر باشد.',
    'filled' => 'فیلد :attribute باید مقدار داشته باشد.',
    'gt' => [
        'numeric' => ':attribute باید بزرگتر از :value باشد.',
        'file' => ':attribute باید بزرگتر از :value کیلوبایت باشد.',
        'string' => ':attribute باید بیشتر از :value کاراکتر داشته باشد.',
        'array' => ':attribute باید بیشتر از :value آیتم داشته باشد.',
    ],
    'gte' => [
        'numeric' => ':attribute باید بزرگتر یا مساوی :value باشد.',
        'file' => ':attribute باید بزرگتر یا مساوی :value کیلوبایت باشد.',
        'string' => ':attribute باید بیشتر یا مساوی :value کاراکتر داشته باشد.',
        'array' => ':attribute باید بیشتر یا مساوی :value آیتم داشته باشد.',
    ],
    'image' => ':attribute باید یک تصویر معتبر باشد.',
    'in' => ':attribute انتخاب شده، معتبر نیست.',
    'in_array' => 'فیلد :attribute در لیست :other وجود ندارد.',
    'integer' => ':attribute باید عدد صحیح باشد.',
    'ip' => ':attribute باید آدرس IP معتبر باشد.',
    'ipv4' => ':attribute باید یک آدرس معتبر از نوع IPv4 باشد.',
    'ipv6' => ':attribute باید یک آدرس معتبر از نوع IPv6 باشد.',
    'json' => 'فیلد :attribute باید یک رشته از نوع JSON باشد.',
    'lt' => [
        'numeric' => ':attribute باید کوچکتر از :value باشد.',
        'file' => ':attribute باید کوچکتر از :value کیلوبایت باشد.',
        'string' => ':attribute باید کمتر از :value کاراکتر داشته باشد.',
        'array' => ':attribute باید کمتر از :value آیتم داشته باشد.',
    ],
    'lte' => [
        'numeric' => ':attribute باید کوچکتر یا مساوی :value باشد.',
        'file' => ':attribute باید کوچکتر یا مساوی :value کیلوبایت باشد.',
        'string' => ':attribute باید کمتر یا مساوی :value کاراکتر داشته باشد.',
        'array' => ':attribute باید کمتر یا مساوی :value آیتم داشته باشد.',
    ],
    'max' => [
        'numeric' => ':attribute نباید بزرگتر از :max باشد.',
        'file' => ':attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'string' => ':attribute نباید بیشتر از :max کاراکتر داشته باشد.',
        'array' => ':attribute نباید بیشتر از :max آیتم داشته باشد.',
    ],
    'mimes' => 'فرمت‌های معتبر فایل عبارتند از: :values.',
    'mimetypes' => 'فرمت‌های معتبر فایل عبارتند از: :values.',
    'min' => [
        'numeric' => ':attribute نباید کوچکتر از :min باشد.',
        'file' => ':attribute نباید کوچکتر از :min کیلوبایت باشد.',
        'string' => ':attribute نباید کمتر از :min کاراکتر داشته باشد.',
        'array' => ':attribute نباید کمتر از :min آیتم داشته باشد.',
    ],
    'not_in' => ':attribute انتخاب شده، معتبر نیست.',
    'not_regex' => 'فرمت :attribute معتبر نیست.',
    'numeric' => ':attribute باید عدد یا رشته‌ای از اعداد باشد.',
    'present' => 'فیلد :attribute باید در پارامترهای ارسالی وجود داشته باشد.',
    'regex' => 'فرمت :attribute معتبر نیست.',
    'required' => 'فیلد :attribute الزامی است.',
    'required_if' => 'هنگامی که :other برابر با :value است، فیلد :attribute الزامی است.',
    'required_unless' => 'فیلد :attribute الزامی است، مگر آنکه :other در :values موجود باشد.',
    'required_with' => 'در صورت وجود فیلد :values، فیلد :attribute نیز الزامی است.',
    'required_with_all' => 'در صورت وجود فیلدهای :values، فیلد :attribute نیز الزامی است.',
    'required_without' => 'در صورت عدم وجود فیلد :values، فیلد :attribute الزامی است.',
    'required_without_all' => 'در صورت عدم وجود هر یک از فیلدهای :values، فیلد :attribute الزامی است.',
    'same' => ':attribute و :other باید همانند هم باشند.',
    'size' => [
        'numeric' => ':attribute باید برابر با :size باشد.',
        'file' => ':attribute باید برابر با :size کیلوبایت باشد.',
        'string' => ':attribute باید برابر با :size کاراکتر باشد.',
        'array' => ':attribute باید شامل :size آیتم باشد.',
    ],
    'string' => 'فیلد :attribute باید رشته باشد.',
    'timezone' => 'فیلد :attribute باید یک منطقه زمانی معتبر باشد.',
    'unique' => ':attribute قبلا انتخاب شده است.',
    'uploaded' => 'بارگذاری فایل :attribute موفقیت آمیز نبود.',
    'url' => ':attribute معتبر نمی‌باشد.',
    'height' => 'قد',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name' => 'نام',
        'username' => 'نام کاربری',
        'email' => 'ایمیل',
        'first_name' => 'نام',
        'last_name' => 'نام خانوادگی',
        'password' => 'گذرواژه',
        'password_confirmation' => 'تکرار گذرواژه',
        'city' => 'شهر',
        'country' => 'کشور',
        'address' => 'نشانی',
        'phone' => 'شماره ثابت',
        'mobile' => 'شماره همراه',
        'age' => 'سن',
        'sex' => 'جنسیت',
        'gender' => 'جنسیت',
        'day' => 'روز',
        'month' => 'ماه',
        'year' => 'سال',
        'hour' => 'ساعت',
        'minute' => 'دقیقه',
        'second' => 'ثانیه',
        'title' => 'عنوان',
        'text' => 'متن',
        'content' => 'محتوا',
        'description' => 'توضیحات',
        'excerpt' => 'معرفی خلاصه',
        'date' => 'تاریخ',
        'time' => 'زمان',
        'available' => 'موجود',
        'size' => 'اندازه',
        'terms' => 'شرایط',
        'province' => 'استان',
        'start_city_id' => 'مبدا',
        'end_city_id' => 'مقصد',
        'start_date' => 'تاریخ شروع',
        'end_date' => 'تاریخ پایان',
        'new-password' => 'گذرواژه',
        'new-password-again' => 'تکرار گذرواژه',
        'body' => 'محتوا',
        'slug' => 'نامک',
        'city_id' => 'شهر',
        'role_id' => 'نوع کاربری',
        'bio' => 'بیوگرافی',
        'media_path' => 'فایل',
        'category_id' => 'موضوع',
        'user_id' => 'کاربر',
        'maximum_product_on_shop' => 'حداکثر محصول فعال',
        'shop_name' => 'نام فروشگاه',
        'study_time' => 'زمان مطالعه',
        'shipping_tehran_price' => 'هزینه ارسال تهران',
        'shipping_others_price' => 'هزینه ارسال شهرستان',
        'shipping_tehran_day' => 'زمان ارسال تهران',
        'shipping_others_day' => 'زمان ارسال شهرستان',
        'price' => 'قیمت',
        'order' => 'ترتیب',
        'published_at' => 'تاریخ انتشار',
        'yesterday' => 'دیروز',
        "number_of_games" => 'تعداد بازی',
        "game_minutes" => 'دقایق بازی',
        "number_of_saves" => 'تعداد سیو',
        "dripping_percent" => 'دریپ',
        "pass_accuracy_percent" => 'دقت پاس',
        "physic_percent" => 'قدرت',
        "added_date" => 'تاریخ اضافه شده به تیم',
        "team_id" => 'شناسه تیم',
        "title_en" => 'عنوان انگلیسی',
        "stock_id" => 'شناسه انبار',
        "discount_percent" => 'درصد تخفیف',
        'team_name' => 'نام تیم',
        'played' => 'بازی',
        'won' => 'برد',
        'drawn' => 'مساوی',
        'lost' => 'باخت',
        'goal_difference' => 'تفاضل گل',
        'points' => 'امتیاز',
        'nation' => 'ملیت',
        'height' => 'قد',
        'weight' => 'وزن',
        'birth_date' => 'تاریخ تولد',
        'number' => 'شماره',
        'preferred_foot' => 'پای ترجیحی',
        'position' => 'جایگاه',
        'topic' => 'تاپبک',
        'course' => 'دوره',
        'count_like' => 'تعداد لایک',
        'count_visit' => 'تعداد بازدید',
        'category' => 'موضوع',
        'author' => 'مولف',
        'intro_path' => 'ویدیو معرفی',
        'commentable' => 'کامنت مربوط به',

        'star' => 'ستاره',
        'count_downloaded' => 'تعداد دانلود',
        'duration' => 'مدت دوره',
        'prerequisites' => 'پیش نیاز',
        'thumbnail_path' => 'آواتار',
        'avatar_path' => 'آواتار',
        'question' => 'پرسش',
        'answer' => 'پاسخ',
        'topic_id' => 'مربوط به تاپیک',
        'path' => 'مسیر فایل',
        'is_free' => 'رایگان',
        'headline' => 'عنوان معرفی',
        'course_id' => 'مربوط به دوره',
        'group' => 'گروه',
        'fa' => 'فارسی',
        'banner_plan' => 'پلن بنر',
        'balance' => 'موجودی',
        'id' => 'شناسه',

        'avatar' => 'آواتار',
        'action' => 'عملیات',

        'href' => 'href',
        'icon' => 'آيکون',
        'permission' => 'اجازه دسترسی',

        'hint' => 'متن راهنمایی',

        'unit' => 'واحد',
        'position_id' => 'جایگاه بازیکن',
        'ratio' => 'ضریب',
        'event_date' => 'تاریخ رویداد',
        'deliver_date' => 'تاریخ تحویل',
        'vip' => 'VIP',
        'type' => 'نوع',
        'voice' => 'صدا',
        'total_price' => 'قیمت کل',
        'payment_status' => 'وضعیت پرداخت',
        'audience_name' => 'نام مخاطب',
        'audience_relationship' => 'نسبت با مخاطب',
        'other_audience_name' => 'نام دیگر مخاطب',
        'user_order_times' => 'چندمین سفارش',
        'requested_music' => 'موزیک درخواستی',
        'created_at' => 'تاریخ ایجاد',
        "station" => 'وضعیت',
        "default_media" => 'تضویر پیش فرض',
        "day_price" => 'قیمت هر روز',
        "updated_at" => 'تاریخ ویرایش',

        "banner_plan_id" => 'شناسه پلن بنر',

        "link" => 'لینک',

        "approved_at" => 'تاریخ تایید',

        "score" => 'امتیاز',

        "positive_items" => 'نقاط مثبت',
        "negative_items" => 'نقاط منفی',
        "commentable_type" => 'نوع کامنتیبل',
        "commentable_id" => 'شناسه کامنتیبل',
        "seen_status" => 'وضعیت نمایش',
        "resource" => 'منبع',
        "user_name" => 'نام کاربر',
        'approve_status' => 'وضعیت تایید',
        'quantity' => 'تعداد',
        'shipping_price' => 'هزینه ارسال',

        'shipping_day' => 'زمان ارسال (روز)',
        'seller' => 'فروشنده',
        'buyer' => 'خریدار',
        'product' => 'محصول',
        'audio' => 'صدا',
        'slides' => 'اسلایدها',
        'user' => 'کاربر',

        'promote_expired_at' => 'اتمام تاریخ ویژه',
        'confirmed_at' => 'تاریخ تایید',
        'status' => 'وضعیت',
        'order_id' => 'شماره سفارش',

        'meta_description' => 'توضیحات',
        'meta_keywords' => 'کلمات کلیدی',

        'amount' => 'مقدار',
        'meta' => 'شرح',
        'product_id' => 'شناسه محصول',
        'new_price' => 'قیمت جدید',

        'website' => 'وبسایت',

        'fax' => 'فکس',

        'shop_expired_at' => 'تاریخ انقضای فروشگاه',

        'roles' => 'رول ها',
        'permissions' => 'اجازه ها',

        'whatsapp' => 'واتس اپ',
        'expired_at' => 'تاریخ انقضا',
        'storyable_id' => 'اختصاص استوری به',
        'key' => 'کلید',
        'tracking_code' => 'کد پیگیری',
        'ref_id' => 'رفرنس',
        'ip' => 'آی پی',
        'value' => 'مقدار',
        'old_password' => 'پسورد فعلی',
        'new_password' => 'پسورد جدید',

        'zip_code' => 'کد پستی',
        'direct_phone' => 'تلفن مستقیم',

    ],
];
