<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Kaung Restaurant</title>
    <!-- title icon logo -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/chef.png') }}">
</head>
<body>
    <div class="container-fluid">
        <div class="row p-5 m-5 shadow  mb-5 bg-body rounded">
            <div class="col border-end border-dark">
                <div class="row p-1">
                    <div class="col-6">
                        <ul>
                            <li>သီးစုံထမင်းကြော် (ကြက်)</li>
                            <li>သီးစုံထမင်းကြော် (ဝက်)</li>
                            <li>သီးစုံထမင်းကြော် (ပင်လယ်စာ)</li>
                            <li>ပသျှူးထမင်းကြော် (ကြက်)</li>
                            <li>ပသျှူးထမင်းကြော် (ဝက်)</li>
                            <li>ပသျှူးထမင်းကြော် (ပင်လယ်စာ)</li>
                            <li>ယိုးဒယားထမင်းကြော် (ကြက်)</li>
                            <li>ယိုးဒယားထမင်းကြော် (ဝက်)</li>
                            <li>ယိုးဒယားထမင်းကြော် (ပင်လယ်စာ)</li>
                            <li>တုံယမ်းထမင်းကြော် (ကြက်)</li>
                            <li>တုံယမ်းထမင်းကြော် (ဝက်)</li>
                            <li>တုံယမ်းထမင်းကြော် (ပင်လယ်စာ)</li>
                            <li>နာနတ်သီးထမင်းကြော် (ကြက်)</li>
                            <li>နာနတ်သီးထမင်းကြော် (ဝက်)</li>
                            <li>နာနတ်သီးထမင်းကြော် (ပင်လယ်စာ)</li>
                            <li>တရုတ်ထမင်းကြော် (ကြက်)</li>
                            <li>တရုတ်ထမင်းကြော် (ဝက်)</li>
                            <li>တရုတ်ထမင်းကြော် (ပင်လယ်စာ)</li>
                            <li>အမေရိကန်ထမင်းကြော်</li>
                            <li>ငပိထမင်းကြော် (ကြက်)</li>
                            <li>ငပိထမင်းကြော် (ဝက်)</li>
                            <li>ရွှေတောင်ထမင်းကြော် (ကြက်)</li>
                            <li>ရွှေတောင်ထမင်းကြော် (ဝက်အူချောင်း)</li>
                            <li>ကြက်ဥထမင်းကြော်</li>
                            <li>ထမင်းဖြူ</li>
                            <li>မာလာထမင်းသုပ် (ကြက်ဥဟက်)</li>
                            <li>မာလာထမင်းသုပ် (ကြက်ဥမွှေ)</li>
                            <li>ပြည်ထမင်းသုပ် (ကြက်ဥဟက်)</li>
                            <li>ပြည်ထမင်းသုပ် (ကြက်ဥမွှေ)</li>
                            <li>လက်ဖက်ထမင်း (ကြက်ဥဟက်)</li>
                            <li>လက်ဖက်ထမင်း (ကြက်ဥမွှေ)</li>
                            <li>ထမင်းသုပ် (ကြက်ဥဟက်)</li>
                            <li>ထမင်းသုပ် (ကြက်ဥမွှေ)</li>
                            <li>အာလူးထမင်းသုပ် (ကြက်ဥဟက်)</li>
                            <li>အာလူးထမင်းသုပ် (ကြက်ဥမွှေ)</li>
                            <li>ပုန်းရည်ကြီးထမင်းသုပ် (ကြက်ဥဟက်)</li>
                            <li>ပုန်းရည်ကြီးထမင်းသုပ် (ကြက်ဥမွှေ)</li>
                            <li>ပင်စိမ်းထမင်း (ကြက်)</li>
                            <li>ပင်စိမ်းထမင်း (ဝက်)</li>
                            <li>ပင်စိမ်းထမင်း (ပင်လယ်စာ)</li>
                            <li>ချဥ်စပ်ထမင်း (ကြက်)</li>
                            <li>ချဥ်စပ်ထမင်း (ဝက်)</li>
                            <li>ချဥ်စပ်ထမင်း (ပင်လယ်စာ)</li>
                            <li>ချိုချဥ်ထမင်း (ကြက်)</li>
                            <li>ချိုချဥ်ထမင်း (ဝက်)</li>
                            <li>ချိုချဥ်ထမင်း (ပင်လယ်စာ)</li>
                            <li>ကိုက်လန်ထမင်း (ကြက်)</li>
                            <li>ကိုက်လန်ထမင်း (ဝက်)</li>
                            <li>ကိုက်လန်ထမင်း (ပင်လယ်စာ)</li>
                            <li>ကချင်ချက်ထမင်း (ကြက်)</li>
                            <li>ကချင်ချက်ထမင်း (ဝက်)</li>
                            <li>ကချင်ချက်ထမင်း (ပင်လယ်စာ)</li>
                            <li>ခါးပတ်ထမင်း (ကြက်)</li>
                            <li>ခါးပတ်ထမင်း (ဝက်)</li>
                            <li>ခါးပတ်ထမင်း (ပင်လယ်စာ)</li>
                            <li>စင်းကောထမင်း (ကြက်)</li>
                            <li>စင်းကော (ဝက်)</li>
                            <li>စင်းကော (ပင်လယ်စာ)</li>
                        </ul>
                        <a href="{{ url('/') }}" class="btn btn-info rounded-pill mt-5 ps-3 pe-3"><i class="bi bi-house"></i>Home</a>
                        <a href="order_numbers.html" class="btn btn-warning rounded-pill mt-5 ps-3 pe-3">Pick up</a>
                        <a href="{{ url('/menu/cuisines') }}" class="btn btn-danger rounded-pill mt-5 ps-3 pe-3"><<</a>
                    </div>
                    <div class="col-3">
                        <ul class="custom-ul">
                            <li>5000</li>
                            <li>5000</li>
                            <li>6500</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>5000</li>
                            <li>5000</li>
                            <li>6500</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>6000</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>6000</li>
                            <li>5000</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>2500</li>
                            <li>1000</li>
                            <li>2000</li>
                            <li>2500</li>
                            <li>2000</li>
                            <li>2500</li>
                            <li>2000</li>
                            <li>2500</li>
                            <li>2000</li>
                            <li>2500</li>
                            <li>2000</li>
                            <li>2500</li>
                            <li>2000</li>
                            <li>2500</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>6000</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>6000</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>6000</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>6000</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>6000</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>6000</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>6000</li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row p-1">
                    <div class="col-6">
                        <ul>
                            <li>ကြက်ခြေထောက်ထောင်း</li>
                            <li>ပင်လယ်စာအစုံထောင်း</li>
                            <li>ပြောင်းဖူးထောင်း</li>
                            <li>ယိုးဒယားသင်္ဘောသီးထောင်း</li>
                            <li>အပ်မှိုထောင်း</li>
                            <li>ပုဇွန်ထောင်း</li>
                            <li>မှိုကန်စွန်း</li>
                            <li>ကန်စွန်းပလိန်းချဥ်စပ်</li>
                            <li>ကိုက်လန်ခရုဆီ</li>
                            <li>မုန်ညှင်းဖြူကြော် (ကြက်)</li>
                            <li>မုန်ညှင်းဖြူကြော် (ဝက်)</li>
                            <li>အစိမ်းကြော် (ကြက်)</li>
                            <li>အစိမ်းကြော် (ဝက်)</li>
                            <li>ယူနန်အစိမ်းကြော် (ကြက်)</li>
                            <li>ယူနန်အစိမ်းကြော် (ဝက်)</li>
                            <li>ထိုင်ဝမ်မုန်ညှင်းခရုဆီ</li>
                            <li>ကြက်ဥအကြေကြော်</li>
                            <li>အာလူးချောင်းကြော်</li>
                            <li>တို့ဟူးကြော်</li>
                            <li>မာလာရှမ်းကော (ကြက်)</li>
                            <li>မာလာရှမ်းကော (ဝက်)</li>
                            <li>ပင်လယ်စာဗန်း</li>
                            <li>ဟင်းနုနွယ်ရွက်ကြော်</li>
                            <li>ကြက်ဥပန်းပွင့်ကြော်</li>
                            <li>ထမင်းပေါင်း (ကြက်)</li>
                            <li>ထမင်းပေါင်း (ဝက်)</li>
                            <li>ထမင်းပေါင်း (ပင်လယ်စာ)</li>
                            <li>ယိုးဒယားထမင်းပေါင်း (ကြက်)</li>
                            <li>ယိုးဒယားထမင်းပေါင်း (ဝက်)</li>
                            <li>ယိုးဒယားထမင်းပေါင်း (ပင်လယ်စာ)</li>
                            <li>ငရုတ်ပွထမင်း (ကြက်)</li>
                            <li>ငရုတ်ပွထမင်း (ဝက်)</li>
                            <li>ငရုတ်ပွထမင်း (ပင်လယ်စာ)</li>
                            <li>ကုန်းဘောင်ထမင်း (ကြက်)</li>
                            <li>ကုန်းဘောင်ထမင်း (ဝက်)</li>
                            <li>ကုန်းဘောင်ထမင်း (ပင်လယ်စာ)</li>
                            <li>ယူနန်ထမင်း (ကြက်)</li>
                            <li>ယူနန်ထမင်း (ဝက်)</li>
                            <li>ယူနန်ထမင်း (ပင်လယ်စာ)</li>
                            <li>ယူနန်ထမင်းကြော် (ကြက်)</li>
                            <li>ယူနန်ထမင်းကြော် (ဝက်)</li>
                            <li>ယူနန်ထမင်းကြော် (ပင်လယ်စာ)</li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <ul class="custom-ul">
                            <li>4000</li>
                            <li>8500</li>
                            <li>3000</li>
                            <li>2500</li>
                            <li>3500</li>
                            <li>9000</li>
                            <li>3000</li>
                            <li>3000</li>
                            <li>3500</li>
                            <li>3000</li>
                            <li>5500</li>
                            <li>3000</li>
                            <li>5500</li>
                            <li>3000</li>
                            <li>5500</li>
                            <li>3500</li>
                            <li>2500</li>
                            <li>3000</li>
                            <li>2500</li>
                            <li>11500</li>
                            <li>15500</li>
                            <li>15500</li>
                            <li>3000</li>
                            <li>3500</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>5000</li>
                            <li>5000</li>
                            <li>6500</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>6000</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>6000</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>6000</li>
                            <li>4500</li>
                            <li>4500</li>
                            <li>6000</li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                        <input type="checkbox"><br>
                    </div>
                    <img src="{{ asset('images/chef.png') }}" alt="chef" style="width: 300px; margin-left: 30%;">
                </div>
            </div>
    </div>
</body>
</html>