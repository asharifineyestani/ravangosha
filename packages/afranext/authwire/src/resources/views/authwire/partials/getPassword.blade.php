<header class="afc-wizard__header">
    <h1>رمز عبور را وارد نمایید</h1>
    <span class="afc-wizard__header__back" wire:click="back">برگشت</span>
</header>


<form wire:submit.prevent="loginByPassword" class="afc-wizard__form">

    @csrf

    <div class="afc-wizard__form__item">
        <div class="afc-wizard__form__item__input">
            <input wire:model.defer="password" type="password" class="@if ($errors->has('password')) border-danger @endif  ">
        </div>
        @if ($errors->has('password'))
            <div class="afc-wizard__form__item__subtitle">
                {{ $errors->first('password') }}
            </div>
        @endif
    </div>


    <div class="afc-wizard__form__item">
        <button class="afc-button afc-button--block afc-button--primary" type="submit">ورود
        </button>
    </div>
</form>

<div class="afc-wizard__form__subtitle">
    <button class="afc-button afc-button--secondary" wire:click="loginWithToken" type="button"> ورود با رمز یکبار مصرف ></button>
    <button class="afc-button afc-button--secondary" wire:click="forgotPassword" type="button">فراموشی رمز عبور ></button>
</div>

