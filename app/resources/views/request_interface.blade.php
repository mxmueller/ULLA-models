<h1>without Frontend</h1>

   <form method="post" action="{{ route('request_validation.unit') }}">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="form-group">
                <label>Kommentar</label>
                <textarea class="form-control" name="request_comment" id="request_comment" rows="10"></textarea>
            </div>

            <input type="submit" name="send" value="Urlaubsantrag Abschließen" class="btn btn-dark btn-block">
        </form>