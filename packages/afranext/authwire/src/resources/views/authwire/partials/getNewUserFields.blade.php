<header class="afc-wizard__header">
    <h1>تکمیل ثبت نام</h1>
</header>

<form wire:submit.prevent="register" class="afc-wizard__form">
    @csrf

    <div class="afc-wizard__form__item">
        <div class="afc-wizard__form__item__input">

            <input wire:model.defer="name" value="{{old('name')}}" type="text" class="@if ($errors->has('name')) border-danger @endif" placeholder="نام شما">
        </div>

        @if ($errors->has('name'))
            <div class="afc-wizard__form__item__subtitle">
                {{ $errors->first('name') }}
            </div>
        @endif
    </div>

    <div class="afc-wizard__form__item">
            <button class="afc-button afc-button--primary" type="submit">برو به داشبورد</button>
    </div>
    <div class="afc-wizard__form__item__subtitle">ورود شما به معنای پذیرش شرایط
        وقوانین حریم‌خصوص است.
    </div>
</form>
