<section>

    <style>
        :root {
            --gray: #999;
            --color-primary: #1e6c13;
            --color-primary-hover: #19600f;
            --color-secondary: #4fa7a7;
            --color-secondary-hover: #0aaecb;
            --transition: .3s all;
            --radius: 6px;
            --input-height: 45px;
            --danger: red;
            --font-body: IRANSans;
            --font-heading: pinar;
        }

        @charset "UTF-8";

        @font-face {
            font-family: pinar;
            font-style: normal;
            font-weight: 900;
            src: url("/assets/plugins/fonts/pinar-700.woff2") format("woff2");
        }
        @font-face {
            font-family: IRANSans;
            font-style: normal;
            font-weight: 400;
            src: url("/assets/plugins/fonts/eot/IRANSansWeb(FaNum)_Medium.eot");
            src: url("/assets/plugins/fonts/eot/IRANSansWeb(FaNum)_Medium.eot?#iefix") format("embedded-opentype"), url("/assets/plugins/fonts/woff2/IRANSansWeb(FaNum)_Medium.woff2") format("woff2"), url("/assets/plugins/fonts/woff/IRANSansWeb(FaNum)_Medium.woff") format("woff"), url("/assets/plugins/fonts/ttf/IRANSansWeb(FaNum)_Medium.ttf") format("truetype");
        }



        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: var(--font-body);
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: var(--font-heading);
        }

        button {
            cursor: pointer;
            font-family: var(--font-body) !important;
            margin-bottom: 9px !important;
        }
        /*
         * Section
         */
        section {
            color: #747579;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--color-primary);
            width: 100%;
            height: 100vh;
        }

        .afc-copyright {
            opacity: .8;
            width: 100%;
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            color: white;
        }

        .afc-copyright a {
            color: white;
            font-weight: bold;

        }
        /*
         * Wizard
         */
        .afc-wizard {
            width: 400px;
            padding: 10%;
            line-height: 1.5;
            max-width: 100%;
            border-radius: var(--radius);
            border: 1px solid #eee;
            background-color: #fff;
            margin-bottom: 15px;
        }

        .afc-wizard p {
            font-size: 14px;
            margin-bottom: 20px;
        }

        /*
         * Header
         */
        .afc-wizard__header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            justify-content: space-between;
        }

        .afc-wizard .afc-wizard__header h1 {
            color: #000;
        }

        .afc-wizard .afc-wizard__header span,
        .afc-wizard .afc-wizard__header .afx-wizard__header__back {
            color: var(--gray);
            cursor: pointer;
            font-size: 12px;
        }

        /*
         * Form
         */

        .afc-wizard form {

            display: block;
            overflow: hidden;
        }

        .afc-wizard .afc-wizard__form__item {
            width: 100%;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .afc-wizard__form__item__subtitle {
            color: var(--danger);
            display: block;
            font-size: 12px;
            padding-top: 3px;
        }

        .afc-wizard .afc-wizard__form__item .afc-wizard__form__item__input {

        }

        .afc-wizard .afc-wizard__form__item .afc-wizard__form__item__submit {

        }

        /*
         * Form Input
         */
        .afc-wizard input[type="text"],
        .afc-wizard input[type="email"],
        .afc-wizard input[type="number"],
        .afc-wizard input[type="mobile"],
        .afc-wizard input[type="password"] {
            width: 100%;
            height: var(--input-height);
            padding: 0 20px;
            text-align: right;
            overflow: hidden;
            position: relative;
            white-space: nowrap;
            outline: none !important;
            border: 1px solid #eee;
            border-radius: var(--radius);

            transition: var(--transition);
        }

        .afc-wizard input[type="text"]:hover,
        .afc-wizard input[type="email"]:hover,
        .afc-wizard input[type="number"]:hover,
        .afc-wizard input[type="mobile"]:hover,
        .afc-wizard input[type="password"]:hover {
            outline: 0;
            border: 1px solid #1e6c13;
        }

        .afc-wizard input[type="text"]:focus,
        .afc-wizard input[type="email"]:focus,
        .afc-wizard input[type="mobile"]:focus,
        .afc-wizard input[type="number"]:focus,
        .afc-wizard input[type="password"]:focus {
            outline: 0;
            border: 1px solid #1e6c13;
        }

        .afc-wizard input[type="email"],
        .afc-wizard input[type="mobile"] {
            text-align: left;
        }

        .afc-wizard input[type="number"] {
            text-align: center;
        }

        /*
         * Form Button
         */
        .afc-button {
            cursor: pointer;
            margin-bottom: 6px;
            transition: var(--transition);

            width: 100%;
            height: var(--input-height);
            overflow: hidden;
            position: relative;
            white-space: nowrap;
            outline: none;
            border: 1px solid #eee;
            border-radius: var(--radius);
            color: var(--gray);
            /*background-color: #eee;*/

            transition: var(--transition);
        }

        .afc-button--block {
            text-align: center;
        }

        .afc-button--secondary {
            border: none !important;
            outline: none !important;
            text-align: right;
            color: var(--color-secondary) !important;
            background-color: transparent !important;
        }

        .afc-button--secondary:hover {
            color: var(--color-secondary-hover) !important;
        }

        .afc-button--primary {
            width: 100%;
            height: var(--input-height);
            text-align: center;
            overflow: hidden;
            position: relative;
            white-space: nowrap;
            outline: none;
            border: 1px solid #eee;
            color:  #fff;
            background-color: var(--color-primary);
        }

        .afc-button--primary:hover {
            color:  #fff;
            background-color: var(--color-primary-hover);
        }
        /*
         * Texts
         */
        .afc-wizard__form__subtitle {
            font-size: 12px;
            text-align: center;
        }
    </style>

    <div>
        <div class="afc-wizard">

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif


            @include('authwire::authwire.partials.'.$step)
        </div>

    </div>

    <div class="afc-copyright">
        <p class="afc-copyright__text"> قدرت گرفته از
            <a href="http://afracode.com">افراکد</a>
        </p>

        <p class="afc-copyright__version">
            Version 1.0.2
        </p>
    </div>

</section>
