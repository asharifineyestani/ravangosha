<header class="afc-wizard__header">
    <h1>ورود | ثبت نام</h1>
</header>


<p>
    <span style="display: block">سلام!</span>
    لطفا تلفن همراه خود را وارد نمایید
</p>

<form wire:submit.prevent="loginOrRegister" class="afc-wizard__form">
    @csrf

    <div class="afc-wizard__form__item">
        <div class="afc-wizard__form__item__input">
            <input wire:model.defer="mobile" value="{{old('mobile')}}" type="mobile" class="@if ($errors->has('mobile')) border-danger @endif " placeholder="09xx xxx xxxx">
        </div>

        @if ($errors->has('mobile'))
            <div class="afc-wizard__form__item__subtitle">
                {{ $errors->first('mobile') }}
            </div>
        @endif
    </div>

    <div class="afc-wizard__form__item">
        <button class="afc-button afc-button--block afc-button--primary"
                type="submit">ورود یا ثبت نام
        </button>
    </div>
    <div class="afc-wizard__form__subtitle">ورود شما به معنای پذیرش شرایط
        وقوانین حریم‌خصوص است.
    </div>
</form>
