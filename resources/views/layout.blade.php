<html>
<head>
  <meta charset="utf-8">
<title>@yield("title")</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="container">
	<!-- header -->
  <header>
    @include('askodsheader')
    <nav>
      <ul>
        <?php $path = request()->path(); ?>
        <li><a href="/"  @if($path == "/") class="active" @endif >Home</a>
        </li>
        <li><a href="/about" @if($path== "about") class="active" @endif >About</a></li>
        <li><a href="/contacts" @if($path == "contacts") class="active" @endif>Contacts</a>
        </li>
      </ul>
    </nav>
  </header>

    <!--end header -->
    <!-- main -->
    <main>
      @if (session('status'))<span>{{session('status')}}</span>@endif
    	<div id="content">
        <section>
          @yield("content")
        </section>
    </main>
    <!-- end main -->
    <!-- footer -->
    <footer>
    <div id="left_footer">&copy; Copyright 2008 Neutral
    </div>
    <div id="right_footer">
        my simple site
    </div>
    </footer>
    <!-- end footer -->
</div>
</body>
</html>
