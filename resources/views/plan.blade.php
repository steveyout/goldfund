@extends('layouts.app')
<link rel="stylesheet" href="/css-template/plan_style.css">
@section('content')
    <section data-ng-controller="liveUser as vm" ng-cloak  class="focus" id="focus">
        <div class="container">
            <div class="row">
                <h2>investment Plan</h2>
                <div>
                    <div class="row">
                        <div class="bs-five-area">
                            <div class="col-md-4 no-padding" data-ng-repeat="(key, plan) in vm.plans">
                                <div class="bs-five">
                                    <img src="@{{plan.image }}" alt="logo">
                                    <div class="text-uppercase plan-name">@{{ plan.name }}</div>
                                    <h1 class="bs-caption" style="margin: 30px;">@{{plan.daily * 100 }}<sup>%</sup></h1>
                                    <p>Daily for @{{plan.duration }} days</p>
                                    <ul>
                                        <li><b>Deposit: @{{plan.min_deposit }}$ - @{{plan.max_deposit }}$</b></li>
                                        <li>Total Return: @{{plan.daily * 100 * plan.duration }}%</li>
                                        <li>Withdraw Total Min $10</li>
                                    </ul>
                                    <a class="btn blue btn-success btn-round m-top-40" href="/login">Deposit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <img src="images/plan/plan1.png" class="img-reponsive" style="margin: 0 auto;"/>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="images/plan/plan2.png" class="img-reponsive" style="margin: 0 auto;width: 100%;"/>
                    <p style="font-size:18px;  color:#306"> <span class="glyphicon glyphicon-chevron-right"></span>

                        For Binary Income One Left One Right is Compulsory.

                    </p>

                    <p style="font-size:18px;  color:#309"> <span class="glyphicon glyphicon-chevron-right"></span>

                        Unlimited Depth 10% Binary.

                    </p>

                    <p style="font-size:18px;  color:#30C"> <span class="glyphicon glyphicon-chevron-right"></span>

                        <b>CAPPING:</b> As Per Your Investment Amount.

                    </p>

                    <p style="font-size:18px;  color:#30F"><b>Example:</b> If Your Investment Amount is 10 USD Your Daily Capping is 10 USD on Binary Income. </p>

                    <p style="font-size:18px;  color:#30F">

                        You can Invest More And Increase Your Daily Capping Limit.

                </div>
                <div class="col-md-6">
                    <img src="images/plan/plan3.png" class="img-reponsive" style="margin: 0 auto;width: 100%;"/>
                    <p style="color:#C0F"><span class="glyphicon glyphicon-triangle-right">

            </span> Minimum Investment 50 USD.

                    </p>

                    <p style="color:#C0C"><span class="glyphicon glyphicon-triangle-right">

            </span> Maximum Investment No Limit.

                    </p>

                    <p style="color:#C09"><span class="glyphicon glyphicon-triangle-right">

            </span> 3% Daily Growth 60 Days (Everyday).

                    </p>

                    <p style="color:#C06"><span class="glyphicon glyphicon-triangle-right">

            </span> Daily Withdrawal Minimum USD 10 - USD 500 .

                    </p>

                    <p style="color:#C03"><span class="glyphicon glyphicon-triangle-right">

            </span> No Transaction Charges.

                    </p>

                    <p style="color:#C03"><span class="glyphicon glyphicon-triangle-right">

            </span> Instant Withdrawal Creadited within 24-48 Hours in Your Bitcoin Wallet.

                    </p>

                    <p style="color:#C03"><span class="glyphicon glyphicon-triangle-right">

            </span><b>Daily Capping</b>: As Per your investment Amount.

                    </p>

                    <p><span class="glyphicon glyphicon-triangle-right">

            </span>Example Of Daily Capping.<span class="glyphicon glyphicon-hand-down"></span>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="/angular/angular-moment/moment.min.js"></script>
    <script src="/angular/1.5.6/angular.min.js"></script>
    <script src="/angular/angular-moment/angular-moment.min.js"></script>
    <script src="/js/controllers/liveUserController.js"></script>
@endsection