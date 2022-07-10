@extends('layouts.master')
@section('cont')
<section class="main">
  <div>
    <h2>نبذة عن الموقع</h2>
    <p>
      موقع E-Tax OnlinePayment هو موقع بسيط يقوم بمساعدتك للوصول<br />
      ودفع الضرائب العقارية الكترونيا عن طريق ايصالك الي جهات الدفع<br />
      او عناوين المأموريات ويسعي لتقديم خدمة سريعة و مميزة
    </p>
    <a href="#taxes-types" class="main-btn">اعرف اكثر عن انواع الضرائب</a>
  </div>
</section>

<section class="cards" id="taxes-types">
      <h2 class="title">أنواع الضرائب</h2>
      <div class="content">
        <div class="card">
          <div class="image">
            <a href="#" target="blank">
              <img
                src="img/general-tax-cert-residential-shutterstock_181786298-550x350.jpg"
                alt="BuildingTaxType"
            /></a>
          </div>
          <div class="info">
            <h3>الضريبة علي العقارات</h3>
          </div>
        </div>
        <div class="card">
          <div class="image">
            <a href="#" target="blank">
              <img src="img/land1.jpg" alt="LandTaxType"
            /></a>
          </div>
          <div class="info">
            <h3>الضريبة على الأطيان</h3>
          </div>
        </div>
        <div class="card">
          <div class="image">
            <a href="#" target="blank">
              <img src="img/winter2_0.jpg" alt="FunTaxType"
            /></a>
          </div>
          <div class="info">
            <h3>الضريبة على الملاهى</h3>
          </div>
        </div>
      </div>
    </section>

    <section class="foot">
      <div>
        <h1>ادفع الآن</h1>
        <p>ادفع عن طريق خدمة الدفع الكتروني او قم بانشاء حساب وابدأ الآن</p>
        <a href="#" class="button">ادفع الآن</a>
        <a href="{{route('register')}}" class="button" id="signup">انشاء حساب</a>
      </div>
    </section>
@endsection