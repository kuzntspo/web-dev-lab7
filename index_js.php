<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles_js.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Poiret+One&display=swap" rel="stylesheet">
    <script src="main_js.js" defer></script>
    <title>Калькулятор</title>
</head>
<body>
    
<header class="header" id="top">
    <div class="wrapper">
      <div class="header__wrapper">
        <div class="logo">CALCULATOR</div>
        <nav class="nav">
          <ul class="menu">
            <li class="menu__item"><a href="">Главная</a></li>
            <li class="menu__item"><a href="#footer">Контакты</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <main>	
	<div class="elements">
        <div class="calc-pic">
            <img src="/calc_2.jpg" height="536px">
        </div>
        <div class="calc-container" id="calc-container">
            <div class="screen" id="screen">
                <textarea id="out_screen" rows="5" cols="33" wrap="soft" onclick="paste()" disabled></textarea>
                <span></span>
            </div>
            <div class="buttons" id="buttons">
                <div class="digits" id="digits">
                    <button class="key_digit" id="d_1" value="1">1</button>
                    <button class="key_digit" id="d_2" value="2">2</button>
                    <button class="key_digit" id="d_3" value="3">3</button>
                    <button class="key_digit" id="d_4" value="4">4</button>
                    <button class="key_digit" id="d_5" value="5">5</button>
                    <button class="key_digit" id="d_6" value="6">6</button>
                    <button class="key_digit" id="d_7" value="7">7</button>
                    <button class="key_digit" id="d_8" value="8">8</button>
                    <button class="key_digit" id="d_9" value="9">9</button>
                    <button class="key_digit" id="d_c" value=".">.</button>
                    <button class="key_digit" id="d_0" value="0">0</button>
                    <button class="key" style="visibility: hidden;" id="b_hidden" value=""></button>
                </div>
                <div class="other" id="other" >
                    <button class="key_operation" id="o_a" value="+">+</button>
                    <button class="key_clear_1" id="b_c_all" value="C">C</button>
                    <button class="key_bracket" id="b_l" value="(">(</button>
                    <button class="key_bracket" id="b_r" value=")">)</button>
                    <button class="key_operation" id="o_d" value="/">/</button>
                    <button class="key_operation" id="o_m" value="*">*</button>
                    <button class="key_operation" id="o_s" value="-">-</button>
                    <button class="key_result" id="bt_r" value="=">=</button>
                    <button class="key_clear_2" id="b_c_one" value="CE">CE</button>
                </div>
            </div>
        </div>
    </div>
    </main>
    <footer class="footer" id="footer">
    <div class="wrapper">
      <div class="footer__wrapper">
        <div class="footer-info">
          <ul>
            <li class="footer-info__item">Кузнецова Полина Сергеевна</li>
            <li class="footer-info__item">
              Московский Политех
            </li>
            <li class="footer-info__item" style="color: rgb(127, 111, 111)">
              + 7 (985) 141-31-19
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>