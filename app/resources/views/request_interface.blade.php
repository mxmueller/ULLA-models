   <form method="post" action="{{ route('request_validation.unit') }}">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="form-group">
                <label>Kommentar</label>
                <textarea class="form-control" name="request_comment" id="request_comment" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="creator">Creator:</label><br>
                <input type="text" id="creator" name="creator"><br>
            </div>

            <div class="form-group">
                <label for="executive">Executive:</label><br>
                <input type="text" id="executive" name="executive"><br>
            </div>

            <div class="form-group">
                <label for="start">Start:</label><br>
                <input type="number" id="start" name="start"><br>
            </div>

            <div class="form-group">
                <label for="end">End:</label><br>
                <input type="number" id="end" name="end"><br>
            </div>

            <input type="submit" name="send" value="Urlaubsantrag Abschließen" class="btn btn-dark btn-block">
        </form>



