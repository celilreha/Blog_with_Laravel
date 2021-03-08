

@extends("front.layout.master")
@section("title","İletişim")
@section("bg","https://www.swartea.com/wp-content/uploads/2016/10/contact.jpg")
@section("content")

    <div class="col-md-8">
        @if(session("success"))
            <div class="alert alert-success">
                {{session("success")}}
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <p>Bizimle iletişime geçebilirsiniz.</p>
        <form method="post" action="{{route("contact.post")}}">
            @csrf
            <div class="control-group">
                <div class="form-group controls">
                    <label>Ad Soyad</label>
                    <input type="text" class="form-control" placeholder="Ad Soyad" value="{{old("name")}}" name="name" required>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group controls">
                    <label>Email Adresi</label>
                    <input type="email" class="form-control" placeholder="Email Adresi" value="{{old("email")}}" name="email" required>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group col-xs-12 controls">
                    <label>Konu</label>
                    <select class="form-control" name="topic">
                        <option @if(old("topic")=="Bilgi") selected @endif>Bilgi</option>
                        <option @if(old("topic")=="Destek") selected @endif>Destek</option>
                        <option @if(old("topic")=="Genel") selected @endif>Genel</option>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group controls">
                    <label>Mesajınız</label>
                    <textarea rows="5" name="message" class="form-control" placeholder="Mesajınız">{{old("message")}}</textarea>
                </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Gönder</button>
            </div>
        </form>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Adres
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </blockquote>
            </div>
        </div>
    </div>


@endsection

