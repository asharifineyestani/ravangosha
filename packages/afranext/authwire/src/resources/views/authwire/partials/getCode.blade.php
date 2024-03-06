<div style="display: block; width: 400px; max-width: 100%">
    <header class="afc-wizard__header">
        <h1>کد تایید را وارد کنید</h1>
        <span class="afc-wizard__header__back" wire:click="back">برگشت</span>
    </header>
    <p class="fs-6">


        {{$this->getCodeText()}}

    </p>


    <form wire:submit.prevent="isValidCode" class="afc-wizard__form">

        @csrf

        <div class="afc-wizard__form__item">
            <div class="afc-wizard__form__item__input">
                <input wire:model.defer="code" type="number" placeholder="xxxx"
                       class="@if ($errors->has('code')) border-danger @endif">
            </div>
            @if ($errors->has('code'))
                <div class="afc-wizard__form__item__subtitle">
                    {{ $errors->first('code') }}
                </div>
            @endif
        </div>


        <div class="align-items-center mt-0">
            <div class="d-grid">
                <button class="afc-button afc-button--block afc-button--primary"
                        type="submit">بررسی کد
                </button>
            </div>
        </div>


        <div class="afc-wizard__form__item">
            <div wire:poll.1000ms="decrement">

                <div class="form-text text-center mt-3" style="font-size: 12px">
                    @if($count > 0)
                        <p><span>{{$count}}</span>
                            مانده تا دریافت مجدد کد</p>
                    @else
                        <button class="afc-button afc-button--secondary" wire:click="resendCode"> درخواست مجدد کد ></button>
                    @endif
                </div>

            </div>
        </div>


    </form>

</div>
