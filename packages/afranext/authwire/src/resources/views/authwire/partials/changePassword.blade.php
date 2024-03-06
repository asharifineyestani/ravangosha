<header class="afc-wizard__header">
    <h1>تغییر پسورد</h1>
    <span class="afc-wizard__header__back" wire:click="back">برگشت</span>
</header>

<form wire:submit.prevent="changePassword" class="afc-wizard__form">

    @csrf

    <div class="afc-wizard__form__item">
        <div class="afc-wizard__form__item__input">
            <input wire:model.defer="newPassword" type="password" placeholder="پسورد جدید" class="@if ($errors->has('newPassword')) border-danger @endif">
        </div>
        @if ($errors->has('newPassword'))
            <div class="afc-wizard__form__item__subtitle">
                {{ $errors->first('newPassword') }}
            </div>
        @endif
    </div>


    <div class="afc-wizard__form__item">
        <div class="afc-wizard__form__item__input">
            <input wire:model.defer="confirmationPassword" type="password" placeholder="تکرار پسورد جدید" class="@if ($errors->has('confirmationPassword')) border-danger @endif  ">
        </div>
        @if ($errors->has('confirmationPassword'))
            <div class="afc-wizard__form__item__subtitle">
                {{ $errors->first('confirmationPassword') }}
            </div>
        @endif
    </div>


    <div class="afc-wizard__form__item">
        <button class="afc-button afc-button--block afc-button--primary" type="submit">ثبت پسورد جدید</button>
    </div>
</form>

