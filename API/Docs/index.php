<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jongrpl Docs API</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="scribbler-global.css">
    <link rel="stylesheet" href="scribbler-doc.css">
  </head>
  <body>
    <div class="doc__bg"></div>
    <nav class="header">
      <h1 class="logo">Jongrpl<span class="logo__thin">Doc</span></h1>
      <ul class="menu">
        <div class="menu__item toggle"><span></span></div>
        <li class="menu__item"><a href="/" class="link link--dark"><i class="fa fa-home"></i> Home</a></li>
      </ul>
    </nav>
    <div class="wrapper">
      <aside class="doc__nav">
        <ul>
          <li class="js-btn selected">Get Started</li>
          <li class="js-btn">Endpoints</li>
        </ul>
      </aside>
      <article class="doc__content">
        <section class="js-section">
          <h3 class="section__title">Get Started</h3>
          <p>API untuk data jongrpl1 mulai dari siswa , pelajaran. <b>Read Only</b></p>
          <h3 class="section__title">GET Siswa</h3>
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                https://jongrpl1.eu.org/api/siswa
              </code>
            </pre>
          </div>
        </section>
        <section class="js-section">
          <h3 class="section__title">GET Pelajaran</h3>
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                https://jongrpl1.eu.org/api/pelajaran
              </code>
            </pre>
          </div>
        </section>
      </article>
    </div>

    <footer class="footer">&copy Developer by RPL 2022</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="scribbler.js"></script>
  </body>
</html>