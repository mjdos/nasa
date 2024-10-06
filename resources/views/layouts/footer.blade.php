<style>
  body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
  }

  .content {
      flex: 1; /* Faz o conteúdo crescer e empurrar o footer para o final */
  }

  .footer {
      background-color: #3F3F3F;
      color: white;
      text-align: center;
      padding: 20px 0;
      width: 100%;
  }

  .footer-icons {
      margin-bottom: 10px;
  }

  .fa {
      padding: 15px;
      font-size: 20px;
      width: 50px;
      border-radius: 50%;
      text-align: center;
      text-decoration: none;
      margin: 5px;
      transition: background-color 0.3s ease, opacity 0.3s ease;
  }

  .fa:hover {
      opacity: 0.8;
  }

  .fa-facebook {
      background: #3B5998;
      color: white;
  }

  .fa-twitter {
      background: #55ACEE;
      color: white;
  }

  .fa-google {
      background: #dd4b39;
      color: white;
  }

  .fa-youtube {
      background: #bb0000;
      color: white;
  }

  .fa-instagram {
      background: #881272;
      color: white;
  }
  .fa-github {
      background: #000000;
      color: white;
  }
  .footer p {
      margin-top: 10px;
      font-size: 14px;
  }
</style>


  <div class="content">
 
  </div>


<footer>
    <div class="footer">
        <div class="footer-icons">
            <a href="https://www.facebook.com" class="fa fa-facebook"></a>
            <a href="https://www.twitter.com" class="fa fa-twitter"></a>
            <a href="https://www.google.com" class="fa fa-google"></a>
            <a href="https://www.youtube.com" class="fa fa-youtube"></a>
            <a href="https://www.instagram.com" class="fa fa-instagram"></a>
            <a href="https://github.com" class="fa fa-github"></a>

        </div>
        <p>Desenvolvido por Code Creators</p>
    </div>
</footer>