@extends ("layout.master")
@section ('style')
<style>
    h2 {
        color: blue;
        margin-left: 50px;
        font-family: arial;

    }

    p {
        font-size: 20px
    }

    #first {
        font-size: 60px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-style: oblique;
        font-weight: bold;
        margin-left: 50px;
    }
</style>
@endsection

@section("content")
<div class="container mt-5">
    <h1 id="first">About Us</h1>

    <br>

    <h2 style="align:center"><b>We Do Great Design For Creative Folks</b></h2>
    <br>

    <div class="row">
        <div class="col-lg-8">
            <div style="height: 500px;align:center">
                <img src="{{asset('images/about.jpg')}}" style="height:500px">
            </div>
        </div>
    </div>
    <br>


    <div class="row">
        <div class="col-lg-8">
            <p><b>Our agents inspire and serve their clients first. Getting to know you on a personal level allows them to give a solid recommendation to you and your family based on Ramsey's proven principles.
                    <br><br>
                    Our ELPs close on more homes than 90% of other agents in their area. You'd never build a home without a blueprint. So why blindly buy or sell one without the best agent?
                    <br>
                    <br>
                    You're not getting suckered into a deal you don't want. Our ELPs value relationships over money, they're fans of Ramsey, and they know what role your home should play in your budget.
        </div>

    </div>
    <div class="col-sm-12 position-relative">
        <div class="about-img-box">
            <img src="images/ab.jfif
              " alt="" class="img-fluid">
        </div>
        <div class="sinse-box">
            <h3 class="sinse-title">EstateAgency
                <span></span>
                <br> Sinse 2017
            </h3>
            <p>Art & Creative</p>
        </div>
    </div>
</div>
@endsection