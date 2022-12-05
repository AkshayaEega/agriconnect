<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      #container {
        display: flex;
        background-color: bisque;
        align-content: center;
        justify-content: left;
      }
      #cont1 {
        background-color: white;
        align-items: center;
        margin: 10px;
        width: 20%;
      }
      #cont2 {
        background-color: white;
        align-items: center;
        margin: 10px;
        width: 80%;
      }
      .box {
        max-width: 800px;
        margin: auto;
        background: #f2f2f2;
        overflow: auto;
      }
      .gallery {
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        width: 390px;
      }
      .gallery img {
        width: 80%;
        height: auto;
      }
      .desc {
        padding: 15px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div id="container">
      <div id="cont1">
        <p>LABOURS</p>
        <ul>
          <li>Male</li>
          <li>Female</li>
          <li>Age-(20-40)</li>
        </ul>
        <p>MACHINERY</p>
        <ul>
          <li>Tractors</li>
          <li>Harvesters</li>
          <li>Levelers</li>
          <li>Plough or plow</li>
          <li>ripper machine</li>
        </ul>
        <p>PESTICIDES</p>
        <ul>
          <li>Herbicides</li>
          <li>insecticide</li>
          <li>nematicide</li>
          <li>avicide</li>
          <li>fungicide</li>
        </ul>
        <p>SEEDS</p>
        <ul>
          <li>Cotton seeds</li>
          <li>peanut</li>
          <li>corn</li>
          <li>millets</li>
        </ul>
      </div>
      <div id="cont2" class="box">
        <div class="gallery">
          <img
            src="https://technext.ng/wp-content/uploads/2020/03/tractor-image.jpg"
            height="200px"
          />
          <div class="desc">Harvest <br />price=2000 per acre<br /></div>
        </div>
        <div class="gallery">
          <img
            src="https://m.media-amazon.com/images/I/61jJEjOKXfL._SL1500_.jpg"
            height="200px"
          />
          <div class="desc">peanutseeds<br />price=10000<br /></div>
        </div>

        <div class="gallery">
          <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvfQDZ0GFFBEwbhVVxedtMq-9KRiDyIyYfLECeKdYXmijGHq7Rby2secaI5OOucI8P&usqp=CAU"
            height="250px"
          />

          <div class="desc">
            Pesticide <br />price=300<br /><br />Free on renting harvestor<br />
          </div>
        </div>
        <div class="gallery">
          <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbMA_tMOxQHEnEyoGx_WbKoouCx01BDwQ7Fg&usqp=CAU"
            height="250px"
          />

          <div class="desc">
            Labours
            <br />Time slot:(9:00am-5:00pm)<br />
            <br />Availability:Booked<br />
          </div>
        </div>
      </div>
    </div>
  </body>
</html>