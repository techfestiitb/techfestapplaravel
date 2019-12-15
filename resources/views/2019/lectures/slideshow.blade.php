<style>
    html, body, main{
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
    }

    #carousel{
        position: relative;
        height: 250px;
        /*top: 50%;*/
        /*transform: translateY(-50%);*/
        overflow: hidden;
    }

    #carousel > div.slideImg{
        position: absolute;
        opacity: 0;
    }

    #carousel > div > img{
        width: 250px;
        transition: width 1s;
    }

    #carousel > div.hideLeft{
        left: 0%;
        opacity: 0;
        transition: transform 1s, left 1s, opacity 1s;
        transform: translateY(50%) translateX(-50%);
    }

    #carousel > div.hideLeft > img{
        width: 200px;
    }

    #carousel > div.hideRight{
        left: 100%;
        transition: transform 1s, left 1s, opacity 1s;
        opacity: 0;
        transform: translateY(50%) translateX(-50%);
    }

    #carousel > div.hideRight > img{
        width: 200px;
    }

    #carousel > div.prev{
        z-index: 5;
        left: 30%;
        transform: translateY(50px) translateX(-50%);
        opacity: 1;
        transition: transform 1s, left 1s, opacity 1s;
    }

    #carousel > div.prev > img{
        width: 300px;
    }

    #carousel > div.prevLeftSecond{
        z-index: 4;
        left: 15%;
        transform: translateY(50%) translateX(-50%);
        opacity: 0.7;
        transition: transform 1s, left 1s, opacity 1s;
    }

    #carousel > div.prevLeftSecond > img{
        width: 200px;
    }

    #carousel > div.selected{
        z-index: 6;
        left: 50%;
        transition: transform 1s, left 1s, opacity 1s;
        opacity: 1;
        transform: translateY(0px) translateX(-50%);
    }

    #carousel > div.next{
        z-index: 5;
        left: 70%;
        transition: transform 1s, left 1s, opacity 1s;
        opacity: 1;
        transform: translateY(50px) translateX(-50%);
    }

    #carousel > div.next > img{
        width: 300px;
    }

    #carousel > div.nextRightSecond{
        z-index: 4;
        left: 85%;
        transition: transform 1s, left 1s, opacity 1s;
        transform: translateY(50%) translateX(-50%);
        opacity: 0.7;
    }

    #carousel > div.nextRightSecond > img{
        width: 200px;
    }


    div.positionBtn{
        position: fixed;
        left: 50%;
        transform: translateX(-50%);
        bottom: 10px;
    }

    #prev, #next{
        background: #272727;
        color: #ffffff;
        border: 0px;
        font-weight: bold;
        font-size: 22px;
        margin: 0px;
        opacity: 0.6;
    }

    #prev > span, #next >span{
        width: 100px;
        padding: 15px;
        display: block;
    }

    #prev{
        text-align: right;
        border-radius: 100% 0px 0px 100%!important;
    }

    #next{
        text-align: left;
        border-radius: 0px 100% 100% 0px!important;
    }

    #prev:hover, #next:hover{
        opacity: 1;
    }

    #prev:focus, #next:focus{
        border: 0px;
    }
    h4{
        text-align: center;
    }

</style>
<div>
    <main>
        <div id="carousel">
            <div class="slideImg hideLeft">
                <h4>{{$random_lectures[0]->name}}</h4>
                <img src="http://techfest.org/{{$random_lectures[0]->image}}" style="border-radius: 10px">
            </div>
            <div class="slideImg prevLeftSecond">
                <h4>{{$random_lectures[2]->name}}</h4>

                <img src="http://techfest.org/{{$random_lectures[1]->image}}" style="border-radius: 10px">
            </div>
            <div class="slideImg prev">
                <h4>{{$random_lectures[2]->name}}</h4>

                <img src="http://techfest.org/{{$random_lectures[2]->image}}" style="border-radius: 10px">
            </div>
            <div class="slideImg selected">
                <h4>{{$random_lectures[3]->name}}</h4>

                <img src="http://techfest.org/{{$random_lectures[3]->image}}" style="border-radius: 10px">
            </div>
            <div class="slideImg next">
                <h4>{{$random_lectures[4]->name}}</h4>

                <img src="http://techfest.org/{{$random_lectures[4]->image}}" style="border-radius: 10px">
            </div>
            <div class="slideImg nextRightSecond">
                <h4>{{$random_lectures[5]->name}}</h4>

                <img src="http://techfest.org/{{$random_lectures[5]->image}}" style="border-radius: 10px">
            </div>
            <div class="slideImg hideRight">
                <h4>{{$random_lectures[6]->name}}</h4>
                <img src="http://techfest.org/{{$random_lectures[6]->image}}" style="border-radius: 10px">
            </div>
        </div>
    </main>
</div>

<script>
    const slide = {
        main : null,
        elementImg : null,
        imgSelected : 0,
        nextSlide: function (){
            if (this.imgSelected != null)
            {
                if (this.imgSelected < (this.elementImg.length - 1))
                {
                    this.imgSelected++;
                    this.normalizeSlide();
                }
            }
        },
        prevSlide: function (){
            if (this.imgSelected != null)
            {
                if (this.imgSelected > 0)
                {
                    this.imgSelected--;
                    this.normalizeSlide();
                }
            }
        },
        normalizeSlide: function (){

            for (num = 0; num < this.elementImg.length; num++)
            {
                this.elementImg[num].classList.remove("hideLeft","prevLeftSecond","prev","selected","next","nextRightSecond","hideRight");
            }

            this.elementImg[this.imgSelected].classList.add("selected");

            if (this.imgSelected > 2)
            {
                this.elementImg[this.imgSelected-2].classList.add("hideLeft");
                this.elementImg[this.imgSelected-2].classList.add("prevLeftSecond");
                this.elementImg[this.imgSelected-1].classList.add("prev");
            }
            else if (this.imgSelected > 1)
            {
                this.elementImg[this.imgSelected-2].classList.add("prevLeftSecond");
                this.elementImg[this.imgSelected-1].classList.add("prev");
            }
            else if (this.imgSelected > 0)
            {
                this.elementImg[this.imgSelected-1].classList.add("prev");
            }

            if ((this.imgSelected + 3) < this.elementImg.length)
            {
                this.elementImg[this.imgSelected+3].classList.add("hideRight");
                this.elementImg[this.imgSelected+2].classList.add("nextRightSecond");
                this.elementImg[this.imgSelected+1].classList.add("next");
            }
            else if ((this.imgSelected + 2) < this.elementImg.length)
            {
                this.elementImg[this.imgSelected+2].classList.add("nextRightSecond");
                this.elementImg[this.imgSelected+1].classList.add("next");
            }
            else if((this.imgSelected + 1) < this.elementImg.length)
            {
                this.elementImg[this.imgSelected+1].classList.add("next");
            }
        }
    }

    window.onload = () => {

        slide.main = document.getElementById("carousel");
        slide.elementImg = slide.main.getElementsByClassName("slideImg");

        for (num = 0; num < slide.elementImg.length; num++)
        {
            slide.elementImg[num].setAttribute("img-number", num);

            slide.elementImg[num].addEventListener("click", (event) => {
                slide.imgSelected = parseInt(event.target.parentElement.getAttribute("img-number"));
                slide.normalizeSlide();
            });

            if (slide.elementImg[num].classList.contains("selected"))
            {
                slide.imgSelected = num;
            }
        }

        document.getElementById("prev").addEventListener("click", () => {slide.prevSlide()});
        document.getElementById("next").addEventListener("click", () => {slide.nextSlide()});

    }
</script>