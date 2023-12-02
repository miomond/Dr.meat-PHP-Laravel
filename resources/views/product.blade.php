<x-head></x-head>
<x-nav></x-nav>

    <style>


        @import url("https://fonts.googleapis.com/css?family=Roboto+Mono");
* {
  box-sizing: border-box;
  font-weight: normal;
}

body {

  text-align: center;

}

h1 {
  font-size: 2.2em;
}

.flip {
  position: relative;
}
.flip > .front,
.flip > .back {
  display: block;
  transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transition-duration: 0.5s;
  transition-property: transform, opacity;
}
.flip > .front {
  transform: rotateY(0deg);
}
.flip > .back {
  position: absolute;
  opacity: 0;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  transform: rotateY(-180deg);
}
.flip:hover > .front {
    transform: rotateY(180deg);
}
.flip:hover > .back {
    opacity: 1;
    transform: rotateY(0deg);
}
.flip.flip-vertical > .back {
    transform: rotateX(-180deg);
}
.flip.flip-vertical:hover > .front {
    transform: rotateX(180deg);
}
.flip.flip-vertical:hover > .back {
    transform: rotateX(0deg);
}

.flip {
    position: relative;
    display: inline-block;
  margin-right: 2px;
  margin-bottom: 1em;
  width: 400px;
}
.flip > .front,
.flip > .back {
    display: block;
    color: white;
    width: inherit;
    background-size: cover !important;
    background-position: center !important;
    height: 220px;
    padding: 1em 2em;
    background: #313131;
    border-radius: 10px;
}
.flip > .front p,
.flip > .back p {
  font-size: 0.9125rem;
  line-height: 160%;
  color: #999;
}

.text-shadow {
  text-shadow: 1px 1px rgba(0, 0, 0, 0.04), 2px 2px rgba(0, 0, 0, 0.04), 3px 3px rgba(0, 0, 0, 0.04), 4px 4px rgba(0, 0, 0, 0.04), 0.125rem 0.125rem rgba(0, 0, 0, 0.04), 6px 6px rgba(0, 0, 0, 0.04), 7px 7px rgba(0, 0, 0, 0.04), 8px 8px rgba(0, 0, 0, 0.04), 9px 9px rgba(0, 0, 0, 0.04), 0.3125rem 0.3125rem rgba(0, 0, 0, 0.04), 11px 11px rgba(0, 0, 0, 0.04), 12px 12px rgba(0, 0, 0, 0.04), 13px 13px rgba(0, 0, 0, 0.04), 14px 14px rgba(0, 0, 0, 0.04), 0.625rem 0.625rem rgba(0, 0, 0, 0.04), 16px 16px rgba(0, 0, 0, 0.04), 17px 17px rgba(0, 0, 0, 0.04), 18px 18px rgba(0, 0, 0, 0.04), 19px 19px rgba(0, 0, 0, 0.04), 1.25rem 1.25rem rgba(0, 0, 0, 0.04);
}
</style>

</head>
<body>

</body>
</html>

    <!-- vertical -->
    <h4 class="mt-5  mb-5">Vertical Flip</h4>
    @foreach ($product as $item)
    <div class="flip flip-vertical">
        <div class="front" style="background-image: url({{ asset('img/' . $item->image) }})")>
           <h1 class="text-shadow">{{ $item->name }}</hi>
        </div>
        <div class="back">
           <h2>{{ $item->price }}</h2>
           <p>{{ $item->bio }}</p>
        </div>
    </div>
    @endforeach
    <div class="flip flip-vertical">
        <div class="front" style="background-image: url(https://images.pexels.com/photos/34950/pexels-photo.jpg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb)">
           <h1 class="text-shadow">TRACK</hi>
        </div>
        <div class="back">
           <h2>Angular</h2>
           <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
           <img src="" alt="">
        </div>
    </div>
    <div class="flip flip-vertical">
        <div class="front" style="background-image: url(https://images.pexels.com/photos/34546/sunset-lake-landscape-summer.jpg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb)">
           <h1 class="text-shadow">SWAMP</hi>
        </div>
        <div class="back">
           <h2>Angular</h2>
           <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
        </div>
    </div>
    <h4>Vertical Flip</h4>
    <div class="flip flip-vertical">
        <div class="front" style="background-image: url(https://images.pexels.com/photos/38136/pexels-photo-38136.jpeg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb)">
           <h1 class="text-shadow">FOREST</hi>
        </div>
        <div class="back">
           <h2>Angular</h2>
           <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
        </div>
    </div>
    <div class="flip flip-vertical">
        <div class="front" style="background-image: url(https://images.pexels.com/photos/34950/pexels-photo.jpg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb)">
           <h1 class="text-shadow">TRACK</hi>
        </div>
        <div class="back">
           <h2>Angular</h2>
           <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
        </div>
    </div>
    <div class="flip flip-vertical">
        <div class="front" style="background-image: url(https://images.pexels.com/photos/34546/sunset-lake-landscape-summer.jpg?w=1260&h=750&dpr=2&auto=compress&cs=tinysrgb)">
           <h1 class="text-shadow">SWAMP</hi>
        </div>
        <div class="back">
           <h2>Angular</h2>
           <p>Good tools make application development quicker and easier to maintain than if you did everything by hand..</p>
           <button></button>
        </div>
    </div>
    <!-- partial -->
      {{-- <script  src="./script.js"></script> --}}

    </body>

