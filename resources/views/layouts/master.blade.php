<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="E-Tax Online Payment Website" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link rel="icon" type="image/x-icon" href="./174854.png" />
    <link rel="stylesheet" href="css/style.css" />
    <title>E-Tax OnlinePayment</title>
  </head>

  <body>
    <header>
      <nav class="navbar">
        @if(Route::has('login'))
          @auth
            <a href="{{route('home')}}" class="logo" style="font-weight: bold;">الصفحة الرئيسية</a>
            <a href="https://enquiry.rta.gov.eg/RealState/RealEstateTaxForm.aspx" target="blank">
          استعلام عن الضريبة العقارية</a>
            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> تسجيل الخروج </a>
            <form id="logout-form" method="POST" action="{{route('logout')}}">
              @csrf
            </form>

          @else
            <a href="{{route('home')}}" class="logo" style="font-weight: bold;">الصفحة الرئيسية</a>
            <a href="https://enquiry.rta.gov.eg/RealState/RealEstateTaxForm.aspx" target="blank">
          استعلام عن الضريبة العقارية</a>
            <a href="{{route('login')}}">تسجيل الدخول</a>
            <a href="{{route('register')}}"> انشاء حساب</a>
          @endauth
        @endif

        
        
        
      </nav>
    </header>

    @yield('cont')

    <footer class="footer">
      <p class="footer-title">Copyright © Team73</p>
    </footer>
  </body>
</html>
