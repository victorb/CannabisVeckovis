@section('content')
    <div class="row-fluid">
        <div class="span12">
            <h1><a href="/" style="color: white;">Cannabis Veckovis</a></h1>
            <p>Cannabis Veckovis är ett nyhetsbrev som kommer till din email varje söndag. Detta är det perfekta nyhetsbrevet för dig som är intresserad av cannabis! Nyhetsbrevet innehåller nyheter, längre läsningar såsom krönikor och debattartiklar, cannabisaktivism, media och en utländsk hörna så du även vet vad som händer utanför Sverige.</p>
            <p>Vi kommer aldrig, under några omständigheter, skicka mer än ett mail varje söndag och vi lovar att inte ge ut din emailadress till någon annan!</p>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">
            <h4>Vad tycker du om Cannabis Veckovis?</h4>
            @foreach($reviews as $review)
            <div class="row-fluid" style="background-color: grey; margin-bottom: 10px; padding: 10px; background-color: rgba(0, 0, 0, 0.5); border-radius: 10px;">
                <div class="row-fluid">
                    <p>{{ $review->body }}</p>
                </div>
                <div class="row-fluid" style="color: lightgrey;">
                    <div class="span6 alpha pull-left">
                        Skrivet av {{ $review->name }}
                    </div>
                    <div class="span6 omega pull-right text-right">
                        {{ $review->created_at }}
                    </div>
                </div>
            </div>
            @endforeach
            {{ $reviews->links() }}
        </div>
        <div class="span6">
            <div class="row-fluid">
                <div class="hero-unit" style="background-color: rgba(0, 0, 0, 0.5); margin-bottom: 0;">
                    <h1>Prenumerera</h1>
                    <p>Gör som <script id="subCount" type="text/javascript" language="JavaScript" src="http://cannabisveckovis.us6.list-manage.com/subscriber-count?b=00&amp;u=37107b36-dbfb-417f-adea-49f8eb703b35&amp;id=9692ceeb1d"></script> andra människor och få Cannabis Veckovis direkt till din mail varje söndag</p>
                    <form action="http://webbenveckovis.us6.list-manage1.com/subscribe/post?u=35bd0416cf&id=9692ceeb1d" method="POST" class="form-inline">
                        <fieldset>
                            <input type="text" class="span8" name="EMAIL" placeholder="Din email"/>
                            <button type="submit" class="btn btn-success"/>Prenumerera</button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="row-fluid" id="review">
                <h5>Om du redan prenumererar, skriv vad du tycker om nyhetsbrevet så vi kan bli bättre!</h5>
                <div class="span5 alpha">
                    <form action="">
                        <fieldset>
                            <textarea class="input-block-level" id="body" rows="8">Jag tycker att Cannabis Veckovis kan bli bättre på att ...</textarea>
                        </fieldset>
                    </form>
                </div>
                <div class="span5 omega">
                    <form id="reviewForm">
                        <fieldset>
                            <label for="name">Ditt namn:</label>
                            <input type="text" id="name" value="Anonym"/>
                            <label for="email">Din email:</label>
                            <input type="text" id="email" placeholder="Bara nödvändigt om du vill ha ett svar"/>
                            <button type="submit" class="btn btn-primary"/>Skicka</button>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="row-fluid">
                <h3>Gamla nummer</h3>
                <div class="display_archive"><div class="campaign">03/31/2013 - <a href="http://us6.campaign-archive1.com/?u=35bd0416cf&amp;id=c88a538315" title="Cannabis Veckovis: Nummer #5" target="_blank">Cannabis Veckovis: Nummer #5</a></div><div class="campaign">03/24/2013 - <a href="http://us6.campaign-archive1.com/?u=35bd0416cf&amp;id=1893828771" title="Cannabis Veckovis: Nummer #4" target="_blank">Cannabis Veckovis: Nummer #4</a></div><div class="campaign">03/17/2013 - <a href="http://us6.campaign-archive1.com/?u=35bd0416cf&amp;id=05ab9252e4" title="Cannabis Veckovis: Nummer #3" target="_blank">Cannabis Veckovis: Nummer #3</a></div><div class="campaign">03/10/2013 - <a href="http://us6.campaign-archive1.com/?u=35bd0416cf&amp;id=ebaa82aa1d" title="Cannabis Veckovis: Nummer #2" target="_blank">Cannabis Veckovis: Nummer #2</a></div><div class="campaign">03/03/2013 - <a href="http://us6.campaign-archive1.com/?u=35bd0416cf&amp;id=c5bf56f172" title="Cannabis Veckovis: Nummer #1" target="_blank">Cannabis Veckovis: Nummer #1</a></div></div>
            </div>
        </div>
    </div>
    <div class="row-fluid" style="margin-top: 1em;">
        <center><p>För att nå oss över mail: <a href="mailto:nyhetsbrev@cannabisveckovis.se" style="color: white; text-decoration: underline;">nyhetsbrev@cannabisveckovis.se</a></p></center>
    </div>
@stop