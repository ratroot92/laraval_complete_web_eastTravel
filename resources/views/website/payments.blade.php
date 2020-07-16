@extends('layouts.website')

@section('content')

    <div class="container">

        <div class="col-sm-12 col-md-5">

            <h3>Payment Options</h3>
            <p style="font-size: 18px">
                Our Bank Infomation

                <br>
                <br>
                <b>
                    Bank 1
                </b><br>
                Všeobecná úverová banka (VÚB)
                <br>
                IBAN: SK48 0200 0000 0035 5399 5857
                <br>
                SWIFT/BIC: SUBASKBX


                <br>
                <br>
                <b>Bank 2</b>
                <br>
                Tatra Banka
                <br>
                IBAN: SK94 1100 0000 0029 4205 5469
                <br>
                SWIFT/BIC: TATRSKBX
            </p>
        </div>
        <div class="col-sm-12 col-md-4" style="font-size: 18px">
            <h3>Currencies We supported</h3>
            EUR: Euro<br>
            USD: US Dollar<br>
            GBP: British Pound Sterling<br>
            CAD: Canadian Dollar<br>
            CNY: Chinese Yuan<br>
            CZK: Czech Republic Koruna<br>
            DKK: Danish Krone<br>
            HUF: Hungarian Forint<br>
            JPY: Japanese Yen<br>
            NOK: Norwegian Krone<br>
            PLN: Polish Zloty<br>
            RUB: Russian Ruble<br>
            CHF: Swiss Franc<br>
        </div>
        <div class="col-sm-12 col-md-3" style="font-size: 18px">
            <h3>Online Payment Methods</h3>
            <div style="display: flex">
                <span>Debit Payment</span>
            </div>
            <div style="display: flex">

            <span>Credit Card</span>
            </div>
            <div style="display: flex">
                <span>PayPal</span>
            </div>
            <div style="display: flex">
                <span>SOFORT BANKING</span>
            </div>
            <div style="display: flex">
                <span>Giropay</span>
            </div>
            <div style="display: flex">
                <span>iDEAL</span>
            </div>
            <div style="display: flex">
                <span>Bancontact</span>
            </div>
            <div style="display: flex">
                <span>Invoice</span>
            </div>
            <div style="display: flex">
                <span>Ali Pay</span>
            </div>
            <div style="display: flex">
            <span>We Chat Pay</span>
            </div>


            </div>


    </div>
    @endsection
